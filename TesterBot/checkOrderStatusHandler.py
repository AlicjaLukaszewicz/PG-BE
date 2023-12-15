from selenium.webdriver.common.by import By
from selenium.webdriver.remote.webdriver import WebDriver
import time
import random
    
class CheckOrderStatusHandler:
    def __init__(self, driver: WebDriver):
        self._driver = driver
        
    def _click_user_profile(self):
        self._driver.find_element(By.CLASS_NAME, "account").click()
        
    def _go_to_history(self):
        self._driver.find_element(By.ID, "history-link").click()
    
    def _go_to_details(self):
        self._driver.find_element(By.CLASS_NAME, "order-actions") \
            .find_elements(By.TAG_NAME, "a")[0].click()
    
    def see_details(self):
        self._click_user_profile()
        self._go_to_history()
        self._go_to_details()
           