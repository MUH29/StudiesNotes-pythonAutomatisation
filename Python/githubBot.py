
# Evry Day
import datetime 
day= datetime.datetime.today().day
# print(day)

f = open("dateToday.txt","r")
daySaved = f.readlines()
# print (daySaved)
f.close
if(int(daySaved[0])==day) :
    print("Yes")
else:
    print("No")
f = open("dateToday.txt","w")
f.write(str(day))
f.close

# Push to github

import os
CommandCommit = "git commit -m "+str(day)
os.system("git add .")
os.system(CommandCommit)
os.system("git push")

