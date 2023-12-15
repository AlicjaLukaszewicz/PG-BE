from selenium.webdriver.common.by import By
from selenium.webdriver.remote.webdriver import WebDriver


class DownloadVatInvoiceHandler:
    def __init__(self, driver: WebDriver):
        self._driver = driver

    def download_invoice(self):
        self._driver.find_element(By.XPATH, '//*[@id="order-infos"]/div[2]/ul/li[3]/a').click()
