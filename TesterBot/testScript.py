from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from webdriver_manager.chrome import ChromeDriverManager
from cardAddingHandler import CardAddingHandler
from accountCreator import AccountCreator
from removeFromOrderHandler import RemoveFromOrderHandler
from createdOrderHandler import CreatedOrderHandler
from searchAndAddHandler import SearchAndAddHandler
from checkOrderStatusHandler import CheckOrderStatusHandler
from downloadVatInvoiceHandler import DownloadVatInvoiceHandler
import time

options = Options()
options.add_experimental_option("detach", True)
options.add_argument("--ignore-ssl-error=yes")
options.add_argument("--ignore-certificate-errors")

driver = webdriver.Chrome(options=options, service=Service(ChromeDriverManager().install()))


def launch_shop():
    driver.get("http://localhost:8001")
    driver.maximize_window()


def close_shop():
    driver.close()
    driver.quit()


cah = CardAddingHandler(driver)
ac = AccountCreator(driver)
rfoh = RemoveFromOrderHandler(driver)
coh = CreatedOrderHandler(driver)
saah = SearchAndAddHandler(driver)
cosh = CheckOrderStatusHandler(driver)
dvih = DownloadVatInvoiceHandler(driver)
def main():
    launch_shop()
    cah.add_random_products_to_card()
    time.sleep(3)
    saah.search_and_add_random_product()
    time.sleep(3)
    rfoh.remove_rand_products()
    time.sleep(3)
    ac.register_account()
    time.sleep(3)
    coh.create_order()
    time.sleep(3)
    cosh.see_details()
    time.sleep(3)
    dvih.download_invoice()
    
main()
    
