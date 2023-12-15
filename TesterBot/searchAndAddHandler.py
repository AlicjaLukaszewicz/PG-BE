from selenium.webdriver.common.by import By
from selenium.webdriver.remote.webdriver import WebDriver
import time
import random

class SearchAndAddHandler:
     def __init__(self, driver: WebDriver):
        self._driver = driver