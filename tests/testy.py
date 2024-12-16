from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
import time
import random
from faker import Faker

fake = Faker()
driver = webdriver.Edge()
driver.maximize_window()

def test_a_add_to_cart():
    driver.get("http://localhost:8080/pl/")
    time.sleep(1)
    
    category1 = driver.find_element(By.ID, "category-3")
    add_products_in_category(category1, 5)
    category2 = driver.find_element(By.ID, "category-6")
    add_products_in_category(category2, 5)

    verify_cart_contents("7")  # FIXME change to 10 when we have all products loaded
    print("Test A passed!")
    driver.delete_all_cookies()

def verify_cart_contents(contents):
    cart = driver.find_element(By.CLASS_NAME, "cart-preview")
    assert contents in cart.text

def add_products_in_category(category, max_prods):
    category.click()
    time.sleep(1)
    
    while True:
        products = driver.find_elements(By.CLASS_NAME, "thumbnail-top")

        for index in range(min(max_prods, len(products))): # max 5 products per category
            # re-fetch products to avoid stale refs
            products = driver.find_elements(By.CLASS_NAME, "thumbnail-top")
            product = products[index]
            product.click()
            time.sleep(2)
            
            add_to_cart_button = driver.find_element(By.CLASS_NAME, "add-to-cart")
            add_to_cart_button.click()
            time.sleep(2)
            
            driver.back()
            time.sleep(2)
            
        break

def test_b_search_and_add_to_cart():
    driver.get("http://localhost:8080/pl/")
    time.sleep(1)

    search_box = driver.find_element(By.NAME, "s")
    search_box.send_keys("mug")
    search_box.send_keys(Keys.RETURN)
    time.sleep(1)

    products = driver.find_elements(By.CLASS_NAME, "thumbnail-top")
    random_index = random.randint(1, len(products)-1)
    products[random_index].click()
    time.sleep(2)

    add_to_cart_button = driver.find_element(By.CLASS_NAME, "add-to-cart")
    add_to_cart_button.click()
    time.sleep(10) # only works with this long sleep, idk even 5 seconds was too fast

    # verify cart contents
    driver.refresh()
    time.sleep(2)
    verify_cart_contents("1")

    print("Test B passed!")
    driver.delete_all_cookies()

def test_c_remove_from_cart():
    driver.get("http://localhost:8080/pl/")
    time.sleep(1)
    
    category = driver.find_element(By.ID, "category-6")
    add_products_in_category(category, 3)
    
    # verify cart contents
    verify_cart_contents("3")
    cart = driver.find_element(By.CLASS_NAME, "cart-preview")
    cart.click()
    time.sleep(2)

    buttons = driver.find_elements(By.CLASS_NAME, "remove-from-cart")
    for index in range(2, -1, -1):
        # re-fetch to avoid stale refs
        button = buttons[index]
        button.click()
        time.sleep(1)

    time.sleep(10)
    verify_cart_contents("0")
    print("Test C passed!")
    driver.delete_all_cookies()

def test_d_register_new_account():
    driver.get("http://localhost:8080/pl/")
    time.sleep(1)

    user_info = driver.find_element(By.CLASS_NAME, "user-info")
    user_info.click()
    time.sleep(1)
    
    register_button = driver.find_element(By.CLASS_NAME, "no-account")
    register_button.click()
    time.sleep(1)

    gender_field = driver.find_element(By.ID, "field-id_gender-1")
    gender_field.click()
    time.sleep(1)

    firstname = fake.first_name()
    firstname_field = driver.find_element(By.ID, "field-firstname")
    firstname_field.send_keys(firstname)
    time.sleep(1)

    lastname = fake.last_name()
    lastname_field = driver.find_element(By.ID, "field-lastname")
    lastname_field.send_keys(lastname)
    time.sleep(1)

    email_input = driver.find_element(By.ID, "field-email")
    email_input.send_keys(fake.email())
    time.sleep(1)

    password_input = driver.find_element(By.ID, "field-password")
    password_input.send_keys(fake.password())
    time.sleep(1)

    privacy_field = driver.find_element(By.NAME, "customer_privacy")
    privacy_field.click()
    time.sleep(1)

    gdpr_field = driver.find_element(By.NAME, "psgdpr")
    gdpr_field.click()
    time.sleep(1)

    submit_button = driver.find_element(By.CLASS_NAME, "form-control-submit")
    submit_button.click()
    time.sleep(3)

    user_info = driver.find_element(By.CLASS_NAME, "user-info")
    print(user_info.text)
    assert (firstname + " " + lastname) in user_info.text

    print("Test D passed!")
    driver.delete_all_cookies()

#test_a_add_to_cart()
#test_b_search_and_add_to_cart()
#test_c_remove_from_cart()
test_d_register_new_account()