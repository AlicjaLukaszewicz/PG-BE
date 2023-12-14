import asyncio
import re
from time import sleep

from bs4 import BeautifulSoup
from selenium import webdriver
from selenium.webdriver.chrome.options import Options

from constants import PAGE_INFO, ITEMS_PER_SUBCATEGORY, PRODUCT_BASE_URL, OUTPUT_IMAGES_DIRECTORY
from utils.image_utils import save_image


async def scrape_subcategory(base_url, subcategory_name):
    listing_url = f"{base_url}{PAGE_INFO}{ITEMS_PER_SUBCATEGORY}"
    product_urls = await fetch_product_urls(PRODUCT_BASE_URL, [listing_url])
    return await process_products(product_urls, subcategory_name)


async def fetch_product_urls(base_url, urls):
    product_urls = []
    for url in urls:
        html_content = await fetch_html(url)
        if html_content:
            for heading_tag in html_content.find_all('article', class_='hm-product-item'):
                anchor_tag = heading_tag.find('a', class_='item-link remove-loading-spinner')
                if anchor_tag:
                    href_value = anchor_tag.get('href')
                    if href_value:
                        product_url = f"{base_url}{href_value}"
                        product_urls.append(product_url)

    return product_urls


async def process_product(url):
    try:
        html_content = await fetch_html(url)
        if html_content:
            product_id = get_content(html_content, 'span', class_='d1cd7b b7f566 a0f363')
            product_name = get_content(html_content, 'h1', class_='ProductName-module--productTitle__3ryCJ')
            price = get_content(html_content, 'span', class_='edbe20 ac3d9e')
            description = get_content(html_content, 'p', class_='d1cd7b b475fe e2b79d')
            main_image_url = get_image_url(html_content, 'div', 'product-detail-main-image-container', 'img')
            secondary_image_url = get_second_image_url(html_content, "img", class_='product-detail-thumbnail-image')

            # Delete "format%5Bwebp%5D%2C" from the secondary image URL
            secondary_image_url = re.sub(r'format%5Bwebp%5D%2C', '', secondary_image_url)

            main_image_url, secondary_image_url = clean_image_urls(main_image_url, secondary_image_url)

            # If any of the required fields is missing, skip the product
            if not all([product_id, product_name, price, description, main_image_url, secondary_image_url]):
                return None

            save_image(main_image_url, OUTPUT_IMAGES_DIRECTORY, product_id, 'main')
            await asyncio.sleep(2)
            save_image(secondary_image_url, OUTPUT_IMAGES_DIRECTORY, product_id, 'secondary')

            product_info = {'id': product_id, 'name': product_name, 'price': price, 'description': description,
                            'main_image_url': main_image_url, 'secondary_image_url': secondary_image_url}

            return product_info

    except Exception as e:
        print(f"Error processing product {url}: {e}")
        return None


async def fetch_html(url):
    try:
        chrome_options = Options()
        chrome_options.add_argument('--headless')
        chrome_options.add_argument(
            "user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) "
            "Chrome/58.0.3029.110 Safari/537.3")
        with webdriver.Chrome(options=chrome_options) as browser:
            browser.get(url)
            await asyncio.sleep(20)
            html = browser.execute_script('return document.documentElement.outerHTML')

        return BeautifulSoup(html, 'html.parser')
    except Exception as e:
        print(f"Error fetching HTML from {url}: {e}")
        return None


async def process_products(product_urls, subcategory_name):
    processed_products = []

    for url in product_urls:
        print(f"Processing product {url}")
        product_info = await process_product(url)

        if product_info:
            product_info['subcategory'] = subcategory_name
            processed_products.append(product_info)

    return processed_products


def get_content(html_content, tag, **kwargs):
    try:
        content_tag = html_content.find(tag, **kwargs)
        return content_tag.text.strip() if content_tag else None
    except Exception as e:
        print(f"Error extracting content: {e}")
        return None


def get_image_url(html_content, container_tag, container_class, image_tag):
    try:
        container = html_content.find(container_tag, class_=container_class)
        image_url = container.find(image_tag)['src']
        return "https:" + image_url
    except Exception as e:
        print(f"Error extracting image URL: {e}")
        return None


def get_second_image_url(html_content, image_tag, **kwargs):
    try:
        image_element = html_content.find(image_tag, **kwargs)
        if image_element:
            return "https:" + image_element.get('src')
    except Exception as e:
        print(f"Error extracting image URL: {e}")
    return None


def clean_image_urls(main_url, secondary_url):
    main_url = re.sub('&amp;', '&', main_url) if main_url else None
    secondary_url = re.sub('&amp;', '&', secondary_url) if secondary_url else None
    return main_url, secondary_url
