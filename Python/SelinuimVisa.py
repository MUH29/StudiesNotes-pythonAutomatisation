# https://stackoverflow.com/questions/66989755/getting-403-when-using-selenium-to-automate-checkout-process


from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support.ui import Select
import time

# from selenium.webdriver.chrome.options import Options


# Random phone and Mail Generator
# import module
import random as r
import string
  


def random_char(char_num):
       return ''.join(r.choice(string.ascii_letters) for _ in range(char_num))



# Options.add_argument("window-size=1200x600")


def function():
    ph_no = []
    # the first number should be in the range of 6 to 9
    ph_no.append(r.randint(6, 9))
    # the for loop is used to append the other 9 numbers.
    # the other 9 numbers can be in the range of 0 to 9.
    for i in range(1, 10):
        ph_no.append(r.randint(0, 9))
    random_phone = ''.join(map(str, ph_no))
    # print(listToStr)
    random_mail = random_char(7)+"@gmail.com"
    driver = webdriver.Chrome('./chromedriver')
    driver.maximize_window()
    driver.get("https://morocco.blsspainvisa.com/embassy_book_appointment.php#")
    # print(driver.title)
    emial_input = driver.find_element_by_id("email")
    emial_input.clear()
    emial_input.send_keys("SaLam Hada un Test en utilisant un bot, li kteb had xi li kateqrah db :)")
    emial_input.send_keys(Keys.RETURN)
    time.sleep(1)
    select = Select(driver.find_element_by_id('mission'))
    # select by visible text
    # select.select_by_visible_text(' Consulate - Casablanca ')
    # # select by value: Consulate - Casablanc
    select.select_by_value('9')

    time.sleep(3)
    # wait this service to load
    select = Select(driver.find_element_by_id('service'))
    # select Student Service
    select.select_by_value('304')
    time.sleep(1)



    # I want to close the X , but id didn't work 
    # btn_close = driver.find_element_by_class_name("close")
    # from selenium.webdriver.common.action_chains import ActionChains
    # driver.implicitly_wait(10)
    # ActionChains(driver).move_to_element(btn_close).click(btn_close).perform()

    # btn_close.click()

    time.sleep(1)
    phone_input = driver.find_element_by_id("phone")
    phone_input.clear()
    # put our random phone number
    phone_input.send_keys(random_phone)
    phone_input.send_keys(Keys.RETURN)

    time.sleep(1)
    email_input = driver.find_element_by_id("email")
    email_input.clear()
    # put our random phone number
    email_input.send_keys(random_mail)
    email_input.send_keys(Keys.RETURN)


    time.sleep(1)
    verification_code = driver.find_element_by_id("otp")
    verification_code.clear()
    verification_code.send_keys(random_phone)
    verification_code.send_keys(Keys.RETURN)


    time.sleep(5)
    btn_save = driver.find_element_by_name("save")
    btn_save.click()

    print("\n\n\n\n\nHello")
    time.sleep(10)
    driver.close()

for i in range(10):
  function()    
