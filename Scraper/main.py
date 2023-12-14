import asyncio
import json
import os

from category_data import get_categories
from constants import OUTPUT_DIRECTORY
from utils.data_conversion_utils import convert_products_to_csv
from utils.scrape_utils import scrape_subcategory


async def scrape_products():
    categories = get_categories()
    tasks = []
    for category in categories:
        for subcategory in category['subcategories']:
            task = asyncio.create_task(scrape_subcategory(subcategory['url'], subcategory['name']))
            tasks.append(task)


    scrapped_products = []

    for task in asyncio.as_completed(tasks):
        try:
            process_result = await task
            scrapped_products.extend(process_result)
        except Exception as e:
            print(f"Error during processing: {e}")

    return scrapped_products


async def main():
    scrapped_products = await scrape_products()

    with open(os.path.join(OUTPUT_DIRECTORY, "scrapped_products.txt"), "w", encoding="utf-8") as file:
        json.dump(scrapped_products, file, ensure_ascii=False, indent=2)

    convert_products_to_csv(scrapped_products, OUTPUT_DIRECTORY)

    print(f"Finished scraping. Results: {len(scrapped_products)} products scrapped.")


if __name__ == "__main__":
    asyncio.run(main())
