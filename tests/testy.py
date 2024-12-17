from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
import time
import random
from faker import Faker

fake = Faker(locale="pl_PL")
driver = webdriver.Edge() # !!! change to your browser
driver.maximize_window()

def test_a_add_to_cart():
    driver.get("http://localhost:8080/pl/")
    
    category1 = driver.find_element(By.ID, "category-3")
    add_products_in_category(category1, 5)
    category2 = driver.find_element(By.ID, "category-6")
    add_products_in_category(category2, 5)

    verify_cart_contents("7")  # FIXME change to 10 when we have all products loaded
    print("Test A passed!")
    driver.delete_all_cookies()

def verify_cart_contents(contents):
    time.sleep(1)
    driver.refresh()
    cart = driver.find_element(By.CLASS_NAME, "cart-preview")
    assert contents in cart.text

def add_products_in_category(category, max_prods):
    category.click()
    products = driver.find_elements(By.CLASS_NAME, "thumbnail-top")
    for index in range(min(max_prods, len(products))): # max 5 products per category
        # re-fetch products to avoid stale refs
        products = driver.find_elements(By.CLASS_NAME, "thumbnail-top")
        products[index].click()
        
        driver.find_element(By.CLASS_NAME, "add-to-cart").click()
        driver.back()
    
def test_b_search_and_add_to_cart():
    driver.get("http://localhost:8080/pl/")

    search_box = driver.find_element(By.NAME, "s")
    search_box.send_keys("mug")
    search_box.send_keys(Keys.RETURN)

    products = driver.find_elements(By.CLASS_NAME, "thumbnail-top")
    random_index = random.randint(1, len(products)-1)
    products[random_index].click()

    driver.find_element(By.CLASS_NAME, "add-to-cart").click()
    time.sleep(10) # only works with this long sleep, idk even 5 seconds was too fast

    # verify cart contents
    driver.refresh()
    verify_cart_contents("1")

    print("Test B passed!")
    driver.delete_all_cookies()

def test_c_remove_from_cart():
    driver.get("http://localhost:8080/pl/")

    category = driver.find_element(By.ID, "category-6")
    add_products_in_category(category, 3)
    
    # verify cart contents
    verify_cart_contents("3")
    driver.find_element(By.CLASS_NAME, "cart-preview").click()
    time.sleep(2)

    buttons = driver.find_elements(By.CLASS_NAME, "remove-from-cart")
    for index in range(2, -1, -1):
        buttons[index].click()
        time.sleep(1)

    time.sleep(10)
    verify_cart_contents("0")
    print("Test C passed!")
    driver.delete_all_cookies()

def test_d_register_new_account():
    driver.get("http://localhost:8080/pl/")
    driver.find_element(By.CLASS_NAME, "user-info").click()
    driver.find_element(By.CLASS_NAME, "no-account").click()
    driver.find_element(By.ID, "field-id_gender-1").click()

    firstname = fake.first_name()
    lastname = fake.last_name()

    driver.find_element(By.ID, "field-firstname").send_keys(firstname)
    driver.find_element(By.ID, "field-lastname").send_keys(lastname)
    driver.find_element(By.ID, "field-email").send_keys(fake.email())
    driver.find_element(By.ID, "field-password").send_keys(fake.password())
    driver.find_element(By.NAME, "customer_privacy").click()
    driver.find_element(By.NAME, "psgdpr").click()
    driver.find_element(By.CLASS_NAME, "form-control-submit").click()
    time.sleep(1)

    user_info = driver.find_element(By.CLASS_NAME, "user-info")
    print(user_info.text)
    assert (firstname + " " + lastname) in user_info.text

    print("Test D passed!")
    driver.delete_all_cookies()

def tests_efghij_order_cart_contents():
    driver.get("http://localhost:8080/pl/")

    # add one product to cart
    category = driver.find_element(By.ID, "category-3")
    add_products_in_category(category, 1)
    time.sleep(1)
    driver.refresh()

    driver.find_element(By.CLASS_NAME, "cart-preview").click()
    time.sleep(1)
    
    driver.find_element(By.CLASS_NAME, "checkout").click()
    time.sleep(1)

    # personal data form
    firstname = fake.first_name()
    lastname = fake.last_name()
    driver.find_element(By.ID, "field-id_gender-1").click()
    driver.find_element(By.ID, "field-firstname").send_keys(firstname)
    driver.find_element(By.ID, "field-lastname").send_keys(lastname)
    driver.find_element(By.ID, "field-email").send_keys(fake.email())
    driver.find_element(By.ID, "field-password").send_keys(fake.password())
    driver.find_element(By.NAME, "customer_privacy").click()
    driver.find_element(By.NAME, "psgdpr").click()
    time.sleep(1)

    driver.find_element(By.CLASS_NAME, "continue").click()
    time.sleep(1)

    # address form
    driver.find_element(By.ID, "field-alias").send_keys("my alias")
    driver.find_element(By.ID, "field-company").send_keys(fake.company())
    driver.find_element(By.ID, "field-vat_number").send_keys(fake.nip())
    driver.find_element(By.ID, "field-address1").send_keys(fake.street_address())
    driver.find_element(By.ID, "field-postcode").send_keys(fake.postalcode())
    driver.find_element(By.ID, "field-city").send_keys(fake.city())
    time.sleep(1)
    
    driver.find_element(By.NAME, "confirm-addresses").click()

    # delivery option
    driver.find_element(By.ID, "delivery_option_5").click()
    time.sleep(1)

    driver.find_element(By.NAME, "confirmDeliveryOption").click()
    print("Test G passed!")

    # payment option
    driver.find_element(By.ID, "payment-option-2").click()

    driver.find_element(By.ID, "conditions_to_approve[terms-and-conditions]").click()
    time.sleep(1)

    driver.find_element(By.XPATH, "//button[contains(text(), 'Złóż zamówienie')]").click()
    print("Test F passed!")
    print("Test E passed!")
    time.sleep(3)

    # check if products have been ordered
    confirmation = driver.find_element(By.CLASS_NAME, "card-title")
    assert "TWOJE ZAMÓWIENIE ZOSTAŁO POTWIERDZONE" in confirmation.text
    print("Test H passed!")

    driver.find_element(By.CLASS_NAME, "account").click()
    driver.find_element(By.ID, "history-link").click()
    driver.find_element(By.XPATH, "//a[contains(text(), 'Szczegóły')]").click()
    print("Test I passed!")
    #TODO faktura

test_a_add_to_cart()
test_b_search_and_add_to_cart()
test_c_remove_from_cart()
test_d_register_new_account()
tests_efghij_order_cart_contents()