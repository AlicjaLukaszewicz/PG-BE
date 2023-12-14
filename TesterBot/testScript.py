from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from webdriver_manager.chrome import ChromeDriverManager
from selenium.webdriver.common.by import By
import random
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time

options = Options()
options.add_experimental_option("detach", True)

driver = webdriver.Chrome(options=options, service=Service(ChromeDriverManager().install()))

class CardAddingHandler():
    def __init__(self):
        self.TARGET_PRODUCTS_QUANTITY = 10
        self.categories = ["category-3", "category-6", "category-9"]
        self.added_products_length = 0
        self.current_category = ""
        pass
    
    def go_to_current_category(self):
        li_element = driver.find_element(By.ID, self.current_category)
        anchor_element = li_element.find_element(By.TAG_NAME, "a")
        # Perform actions on the anchor element if needed, e.g., click
        time.sleep(2)
        anchor_element.click()

    def set_product_quantity(self, products_quantity):
        quantity_box = WebDriverWait(driver, 10).until(
            EC.presence_of_element_located((By.ID, "quantity_wanted"))
        )
        
        # Ensure the quantity box is clickable and clear it
        WebDriverWait(driver, 10).until(
            EC.element_to_be_clickable((By.ID, "quantity_wanted"))
        )
        quantity_box.clear()

        rand_quantity = random.randint(0, products_quantity)
        time.sleep(2)  # Introducing a small delay for stability
        quantity_box.send_keys(Keys.BACKSPACE)  # Ensure any existing value is cleared
        quantity_box.send_keys(str(rand_quantity))


    def add_to_card(self):
        add_to_card_btn = driver.find_element(By.CLASS_NAME, "add-to-cart")
        add_to_card_btn.click()
        self.added_products_length += 1
        try:
            btn_div = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "cart-content-btn")))
        except Exception as e:
            # Handle other exceptions
            print(f"Unexpected Error: {e}")
            return

        if self.added_products_length >= self.TARGET_PRODUCTS_QUANTITY:
            # press go to card
            go_to_card_btn = btn_div.find_element(By.CLASS_NAME, "btn-primary")
            time.sleep(3)
            go_to_card_btn.click()
        else:
            continue_btn = btn_div.find_element(By.TAG_NAME, "button")
            time.sleep(3)
            continue_btn.click()
            self.go_to_current_category()

    def get_random_products_indexes(self, products):
        products_quantity = len(products) - 1
        max_number_to_add = self.TARGET_PRODUCTS_QUANTITY - self.added_products_length - 1
        products_to_add = random.randint(1, max_number_to_add) if products_quantity > max_number_to_add else random.randint(1, products_quantity) 
        random_products_indexes = random.sample(range(0, products_quantity), products_to_add)
        return random_products_indexes
    
    def add_products_from_category_to_card(self, products):
        if self.added_products_length >= self.TARGET_PRODUCTS_QUANTITY:
            return

        random_products_indexes = self.get_random_products_indexes(products)
        
        for index in random_products_indexes:
            products = driver.find_elements(By.CLASS_NAME, "product-title")
            products[index].click()
            self.set_product_quantity(10)
            self.add_to_card()




    def go_to_categories_and_add_products(self):
        for category in self.categories:
            self.current_category = category
            self.go_to_current_category()
            products = driver.find_elements(By.CLASS_NAME, "product-title")
            self.add_products_from_category_to_card(products)
            
            if self.added_products_length >= self.TARGET_PRODUCTS_QUANTITY:
                return


    def add_random_products_to_card(self):
       self.go_to_categories_and_add_products()



def launch_shop():
    driver.get("http://localhost:8001")
    driver.maximize_window()


def close_shop():
    driver.close()
    driver.quit()


cah = CardAddingHandler()
def main():
    launch_shop()
    cah.add_random_products_to_card()

main()
    
