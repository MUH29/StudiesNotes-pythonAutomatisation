
import psutil
from win10toast import ToastNotifier
import time
notifier = ToastNotifier()
while(True):
	battery = psutil.sensors_battery()
	if(battery != None):
		percent = battery.percent
		if(percent> 90):
		   notifier.show_toast("Si l'Uncle, please remove the battery, tkayess ❤😉",str(percent)+"% Battery remaining ",duration=30)
	time.sleep(60*30)
	continue
