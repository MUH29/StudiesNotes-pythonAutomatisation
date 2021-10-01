
import os, glob
import time

while True :
    for filename in glob.glob("./pdfTest*"):
      os.remove(filename) 
    time.sleep(5)

