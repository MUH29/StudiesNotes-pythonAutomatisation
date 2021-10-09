
# Push to github
import os
def new_func(day):
    CommandCommit = "git commit -m " +str(str(day)+"Day❤") 
    os.system("git add .")
    os.system(CommandCommit)
    os.system("git push")

# Evry Day
import datetime 
from win10toast import ToastNotifier
def new_func1():
    day= datetime.datetime.today().day
    f = open("dateToday.txt","r")
    daySaved = f.readlines()
    f.close
    if(int(daySaved[0])==day) :
        pass
    else:
        new_func(day)
        notifier = ToastNotifier()
        notifier.show_toast("Khay Reda , I pushed the commit to github 😉 ",duration=30)
        f = open("dateToday.txt","w")
        f.write(str(day))
        f.close
import time

while(True):
    new_func1()
    time.sleep(60*30)
    continue







