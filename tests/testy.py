from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
import time
import random

driver = webdriver.Edge()
driver.maximize_window()

def test_a_add_to_cart():
    driver.get("http://localhost:8080/pl/")
    time.sleep(1)
    
    category1 = driver.find_element(By.ID, "category-3")
    add_products_in_category(category1)
    category2 = driver.find_element(By.ID, "category-6")
    add_products_in_category(category2)

    # verify cart contents
    cart = driver.find_element(By.CLASS_NAME, "cart-preview")
    assert "7" in cart.text  # FIXME change to 10 when we have all products loaded
    print("Test A passed!")
    driver.delete_all_cookies()


def add_products_in_category(category):
    category.click()
    time.sleep(1)
    
    while True:
        products = driver.find_elements(By.CLASS_NAME, "thumbnail-top")

        for index in range(min(5, len(products))): # max 5 products per category
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
    cart = driver.find_element(By.CLASS_NAME, "cart-preview")
    assert "1" in cart.text

    print("Test B passed!")
    driver.delete_all_cookies()


#test_a_add_to_cart()
test_b_search_and_add_to_cart()
