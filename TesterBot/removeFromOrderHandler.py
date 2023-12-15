from selenium.webdriver.common.by import By
from selenium.webdriver.remote.webdriver import WebDriver
import random
import time

class RemoveFromOrderHandler:
    def __init__(self, driver: WebDriver):
        self._driver = driver
    
    def remove_rand_products(self):
        for _ in range(3):
            card_elements = self._driver.find_elements(By.CLASS_NAME, "cart-item")
            random_index = random.randint(0, len(card_elements) - 1)
            delete_btn = card_elements[random_index].find_element(By.CLASS_NAME, "remove-from-cart")
            delete_btn.click()
            time.sleep(1)
        