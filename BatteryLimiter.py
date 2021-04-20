#you need to convert the extension of the file to .pyw =>

#I learned a lot from this small project : pythonw.py <--> .pyw extention it used to run your the script on 
# the background (without the shell) (instead of python.exe -- .py)
#to automate the excecution , you can use task Schelduler wich I find so intressting
# or as I prefere , just to put the file(script) on   C:\ProgramData\Microsoft\Windows\Start Menu\Programs\StartUp

import psutil
from win10toast import ToastNotifier
#from plyer import notification it works also
import time
#https://www.geeksforgeeks.org/create-battery-notifier-for-laptop-using-python/


				# from psutil we will import the
				# sensors_battery class and with
# that we have the battery remaining
notifier = ToastNotifier()
while(True):
	battery = psutil.sensors_battery()
	#if the battery is detected
	if(battery != None):
		percent = battery.percent
		print(percent)
		if(percent> 90):
			notifier.show_toast("Khay Reda , enlèves La battrie Lah yerda 3lik \n tkayess 3liha",str(percent)+"% Battery remaining wesslat ",duration=30)
		
						#using  plyer import notification
						# notification.notify(
						# 	title="Battery Percentage",
						# 	message=str(percent)+"% Battery remaining",
						# 	timeout=60
						# )
	
	# after every 30 mins it will show the 
	# battery percentage
	#and I will reduce the demand on my CPU

	time.sleep(2)
	
	continue
