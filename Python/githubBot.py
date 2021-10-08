
# Push to github
import os
def new_func(day):
    CommandCommit = "git commit -m " +str(str(day)+"Day❤") 
    os.system("git add .")
    os.system(CommandCommit)
    os.system("git push")

# Evry Day
import datetime 
day= datetime.datetime.today().day
# print(day)

f = open("dateToday.txt","r")
daySaved = f.readlines()
# print (daySaved)
f.close
if(int(daySaved[0])==day) :
    pass
    # wE STILL IN THE SAME DAY 
    # print("Yes")
else:
    # iT AS A DIFFERENT DAY
    # print("No")
    new_func(day)
f = open("dateToday.txt","w")
f.write(str(day))
f.close







