
import psutil
from win10toast import ToastNotifier
import time
notifier = ToastNotifier()
while(True):
	battery = psutil.sensors_battery()
	if(battery != None):
		percent = battery.percent
		print(percent)
		if(percent> 90):
			notifier.show_toast("Khay Reda , enlèves La battrie Lah yerda 3lik \n tkayess 3liha",str(percent)+"% Battery remaining wesslat ",duration=30)
	time.sleep(60*30)
	continue
