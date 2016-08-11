import RPi.GPIO as GPIO
import time

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

GPIO.setup(20, GPIO.OUT)

n = 0
while 1:
	
	if n % 2 == 1:
		GPIO.output(20, 1)
		print "gpio on  %d" % n
	else:
		GPIO.output(20, 0)
		print "gpio off %d" % n

	n = n + 1	
	time.sleep(1)