from selenium.webdriver.common.by import By
from selenium.webdriver.remote.webdriver import WebDriver
from selenium.webdriver.common.keys import Keys
import time
import random
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

class SearchAndAddHandler:
    def __init__(self, driver: WebDriver):
        self._driver = driver
        self.SEARCHED_VALUE = "puszysty"
    
    def _search_for_mug(self):
        search_input = self._driver.find_element(By.NAME, "s")
        search_input.click()
        search_input.clear()
        search_input.send_keys(self.SEARCHED_VALUE)
        time.sleep(2)
        search_input.send_keys(Keys.ENTER)
        
    def _add_random_prod_to_card(self):
        # class js-product
        prod_list = self._driver.find_element(By.ID, "js-product-list")
        products = prod_list.find_elements(By.CLASS_NAME, "js-product")
        random_element_index = random.randint(0, len(products) - 1)
        rand_product = products[random_element_index]
        time.sleep(2)
        rand_product.find_element(By.TAG_NAME, "a").click()
        time.sleep(2)
        add_to_card_btn = WebDriverWait(self._driver, 30).until(
            EC.element_to_be_clickable((By.CLASS_NAME, "add-to-cart"))
        )
        add_to_card_btn.click()
        self._click_go_to_card()
        
    def _click_go_to_card(self):
        try:
            btn_div = WebDriverWait(self._driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "cart-content-btn")))
        except Exception as e:
            print(f"Unexpected Error: {e}")
            return
        go_to_card_btn = btn_div.find_element(By.CLASS_NAME, "btn-primary")
        time.sleep(3)
        go_to_card_btn.click()
    
    def search_and_add_random_product(self):
        self._search_for_mug()
        self._add_random_prod_to_card()
        