import webbrowser
# https://docs.python.org/3/library/webbrowser.html
chrome_path = 'C:/Program Files (x86)/Google/Chrome/Application/chrome.exe %s'
webbrowser.get(chrome_path).open('http://docs.python.org/')
file=open('LastWebsites.txt','r')
for elt in file:
    webbrowser.open_new(elt)
    print(elt)
# webbrowser.open_new('http://www.facebook.com')

# #####################
# ## official Doc : https://www.selenium.dev/documentation/en/webdriver/#:~:text=Selenium%20WebDriver%20refers%20to%20both,and%20more%20concise%20programming%20interface.
# from selenium import webdriver
# # Selenium + chrom webdriver [which I installed , and I have it in the path below]
# driver=webdriver.Chrome("E:/chromedriver.exe")
# driver.get("http://www.facebook.com")
# print (driver.title)
# print(driver.current_url)
# # get all current urls
# driver.current_url
# for handle in driver.window_handles:
#     driver.switch_to.window(handle)
#     print(driver.current_url)


