from selenium.webdriver.common.by import By
from selenium.webdriver.remote.webdriver import WebDriver
import random
import time

class RemoveFromOrderHandler:
    def __init__(self, driver: WebDriver):
        self._driver = driver
        
    def _select_3_card_items(self):
        card_elements = self._driver.find_elements(By.CLASS_NAME, "cart-item")
        return random.sample(range(0, len(card_elements)), 3)
    
    def remove_rand_products(self):
        for item_index in self._select_3_card_items():
            card_elements = self._driver.find_elements(By.CLASS_NAME, "cart-item")
            delete_btn = card_elements[item_index].find_element(By.CLASS_NAME, "remove-from-cart")
            delete_btn.click()
            time.sleep(1)
        