from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
from webdriver_manager.chrome import ChromeDriverManager
from cardAddingHandler import CardAddingHandler
from accountCreator import AccountCreator

options = Options()
options.add_experimental_option("detach", True)
driver = webdriver.Chrome(options=options, service=Service(ChromeDriverManager().install()))


def launch_shop():
    driver.get("http://localhost:8001")
    driver.maximize_window()


def close_shop():
    driver.close()
    driver.quit()


cah = CardAddingHandler(driver)
ac = AccountCreator(driver)
def main():
    launch_shop()
    ac.register_account()
    # cah.add_random_products_to_card()

main()
    
