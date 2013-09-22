#!/usr/bin/python

import sys
import time
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setup(17, GPIO.OUT)
GPIO.setup(18, GPIO.OUT)
GPIO.setup(22, GPIO.OUT)
GPIO.setup(23, GPIO.OUT)

GPIO.output(17, GPIO.HIGH)
time.sleep(60 * float(sys.argv[1]))
GPIO.output(17, GPIO.LOW)

GPIO.output(18, GPIO.HIGH)
time.sleep(60 * float(sys.argv[2]))
GPIO.output(18, GPIO.LOW)

GPIO.output(22, GPIO.HIGH)
time.sleep(60 * float(sys.argv[3]))
GPIO.output(22, GPIO.LOW)

GPIO.output(23, GPIO.HIGH)
time.sleep(60* float(sys.argv[4]))
GPIO.output(23, GPIO.LOW)
