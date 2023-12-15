from selenium.webdriver.common.by import By
from selenium.webdriver.remote.webdriver import WebDriver
import time
import random

class CreatedOrderHandler:
    def __init__(self, driver: WebDriver):
        self._driver = driver
        self._fields_ids = {
            "address": "field-address1",
            "city": "field-city",
            "post_code": "field-postcode"
        }
        
    def _click_finalize_order(self):
        summary_div = self._driver.find_element(By.CLASS_NAME, "cart-summary")
        finalize_btn = summary_div.find_element(By.CLASS_NAME, "btn-primary")
        finalize_btn.click()
    
    def _set_form_field(self, field_id, value):
        element = self._driver.find_element(By.ID, field_id)
        element.clear()
        element.send_keys(str(value))
    
    def _fill_in_address_form(self):
        # TODO: if address already set this: #delivery-addresses will be present
        self._set_address_field()
        time.sleep(2)
        self._set_postcode_field()
        time.sleep(2)
        self._set_city_field()
        time.sleep(2)
        self._confirm_address()
    
    def _click_confirm_btn(self, btn_name):
        confirm_btn = self._driver.find_element(By.NAME, btn_name)
        confirm_btn.click()
        
    def _confirm_address(self):
        self._click_confirm_btn("confirm-addresses")
        
    # confirmDeliveryOption
    def _confirm_delivery_option(self):
        self._click_confirm_btn("confirmDeliveryOption")
    
    def _set_address_field(self):
        self._set_form_field(self._fields_ids["address"], "Some Street 123/222")

    def _set_postcode_field(self):
        self._set_form_field(self._fields_ids["post_code"], "88-888")
    
    def _set_city_field(self):
        self._set_form_field(self._fields_ids["city"], "Gdańsk")
    
    def _choose_random_delivery_option(self):
        delivery_option_boxes = self._driver.find_elements(By.CLASS_NAME, "delivery-option")
        rand_index = random.randint(0, 1)
        delivery_opt = delivery_option_boxes[rand_index].find_element(By.TAG_NAME, "label")
        delivery_opt.click()
        time.sleep(2)
        self._confirm_delivery_option()
    
    def _choose_payment_method_and_make_order(self):
        payment_opt_container = self._driver.find_element(By.CLASS_NAME, "payment-options")
        radio_btns = payment_opt_container.find_elements(By.CLASS_NAME, "custom-radio")
        radio_btns[2].click() # gotowka
        condition_cbox = self._driver.find_element(By.ID, "conditions_to_approve[terms-and-conditions]")
        time.sleep(2)
        condition_cbox.click()
        time.sleep(2)
        create_order_div = self._driver.find_element(By.ID, "payment-confirmation")
        create_order_btn = create_order_div.find_element(By.TAG_NAME, "button")
        create_order_btn.click()
        
    def _go_to_card(self):
        div = self._driver.find_element(By.ID, "_desktop_cart")
        div.find_element(By.TAG_NAME, "a").click()
                
    def create_order(self):
        self._go_to_card()
        self._click_finalize_order()
        self._fill_in_address_form()
        self._choose_random_delivery_option()
        self._choose_payment_method_and_make_order()
        