from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.remote.webdriver import WebDriver
import random
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time

class CardAddingHandler():
    def __init__(self, driver: WebDriver):
        self.driver: WebDriver = driver
        self.TARGET_PRODUCTS_QUANTITY = 6
        self.categories = ["category-3", "category-6", "category-9"]
        self.added_products_length = 0
        self.current_category = ""
        pass
    
    def go_to_current_category(self):
        li_element = self.driver.find_element(By.ID, self.current_category)
        anchor_element = li_element.find_element(By.TAG_NAME, "a")
        time.sleep(2)
        anchor_element.click()

    def set_product_quantity(self, products_quantity):
        quantity_box = WebDriverWait(self.driver, 10).until(
            EC.presence_of_element_located((By.ID, "quantity_wanted"))
        )
        
        WebDriverWait(self.driver, 10).until(
            EC.element_to_be_clickable((By.ID, "quantity_wanted"))
        )
        quantity_box.clear()

        rand_quantity = random.randint(0, products_quantity)
        time.sleep(2)
        quantity_box.send_keys(Keys.BACKSPACE)
        quantity_box.send_keys(str(rand_quantity))


    def add_to_card(self):
        add_to_card_btn = WebDriverWait(self.driver, 30).until(
            EC.element_to_be_clickable((By.CLASS_NAME, "add-to-cart"))
        )

        add_to_card_btn.click()
        self.added_products_length += 1
        try:
            btn_div = WebDriverWait(self.driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "cart-content-btn")))
        except Exception as e:
            print(f"Unexpected Error: {e}")
            return

        if self.added_products_length >= self.TARGET_PRODUCTS_QUANTITY:
            return
        else:
            continue_btn = btn_div.find_element(By.TAG_NAME, "button")
            time.sleep(3)
            continue_btn.click()
            self.go_to_current_category()

    def _get_random_products_indexes(self, products):
        products_quantity = len(products)
        max_number_to_add = min(self.TARGET_PRODUCTS_QUANTITY - self.added_products_length, products_quantity)
        products_to_add = random.randint(1, max_number_to_add)
        if self.current_category == self.categories[2] and (self.TARGET_PRODUCTS_QUANTITY - self.added_products_length) > products_to_add:
            products_to_add = self.TARGET_PRODUCTS_QUANTITY - self.added_products_length
        
        random_products_indexes = random.sample(range(products_quantity), products_to_add)
        return random_products_indexes

    def add_products_from_category_to_card(self, products):
        if self.added_products_length >= self.TARGET_PRODUCTS_QUANTITY:
            return

        random_products_indexes = self._get_random_products_indexes(products)

        for index in random_products_indexes:
            products = self.driver.find_elements(By.CLASS_NAME, "product-title")
            products[index].click()
            self.set_product_quantity(10)
            self.add_to_card()

    def go_to_categories_and_add_products(self):
        for category in self.categories:
            self.current_category = category
            self.go_to_current_category()
            products = self.driver.find_elements(By.CLASS_NAME, "product-title")
            self.add_products_from_category_to_card(products)
            
            if self.added_products_length >= self.TARGET_PRODUCTS_QUANTITY:
                return

    def add_random_products_to_card(self):
       self.go_to_categories_and_add_products()