from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.by import By
from selenium.webdriver.remote.webdriver import WebDriver
import random
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time
import names

class AccountCreator:
    def __init__(self, driver: WebDriver):
        self._driver = driver
        self._chosen_gender = ""
        self._inputs_ids = {
            "name": "field-firstname",
            "last_name": "field-lastname",
            "email": "field-email",
            "password": "field-password",
            "birthday": "field-birthday"
        }
        
    def _find_link_and_click(self, div_class, tag_name):
        containing_div = self._driver.find_element(By.CLASS_NAME, div_class)
        link = containing_div.find_element(By.TAG_NAME, tag_name)
        link.click()
    
    def _set_gender(self):
        radio_buttons = self._driver.find_elements(By.CLASS_NAME, "radio-inline")
        rand_index = random.randint(0, 1)
        radio_buttons[rand_index].click()
        self._chosen_gender = "male" if rand_index == 0 else "female"
    
    def _set_credential(self, el_id, value):
        _input = self._driver.find_element(By.ID, el_id)
        _input.clear()
        time.sleep(2)
        _input.send_keys(str(value))
    
    def _set_name(self, name):
        self._set_credential(self._inputs_ids["name"], name)

    def _set_last_name(self, last_name):
        self._set_credential(self._inputs_ids["last_name"], last_name)

    def _set_email(self, email):
        self._set_credential(self._inputs_ids["email"], email)

    def _set_password(self, password):
        self._set_credential(self._inputs_ids["password"], password)

    def _set_birthday(self, birthday):
        self._set_credential(self._inputs_ids["birthday"], birthday)

    def _set_credentials(self):
        rand_first_name = names.get_first_name(gender=self._chosen_gender)
        rand_last_name = names.get_last_name()
        rand_id = random.randint(1, 10**9)
        email = f"example{rand_id}@mail.com"
        password = "Haslo123"
        birthdate = "1970-05-31"
        self._set_name(rand_first_name)
        self._set_last_name(rand_last_name)
        self._set_email(email)
        self._set_password(password)
        self._set_birthday(birthdate)
        
    def _check_neccessary_boxes(self):
        checkbox_names = ["customer_privacy", "psgdpr"]
        for checkbox_name in checkbox_names:
            try:
                checkbox = self._driver.find_element(By.NAME, checkbox_name)
                checkbox.click()
                print(f"Checkbox '{checkbox_name}' selected.")
            except Exception as e:
                print(f"Error selecting checkbox '{checkbox_name}': {e}")
    
    def _click_register(self):
        self._find_link_and_click("form-footer", "button")
    
    def _fill_in_form(self):
        self._set_gender()
        time.sleep(2)
        self._set_credentials()
        time.sleep(2)
        self._check_neccessary_boxes()
        time.sleep(2)
    
    def register_account(self):
        self._go_to_register_page()
        self._fill_in_form()
        self._click_register()

    def _go_to_register_page(self):
        self._find_link_and_click("user-info", "a")
        self._find_link_and_click("no-account", "a")

        