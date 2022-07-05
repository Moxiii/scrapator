from threading import Thread
import time 

class Run(Thread):
    def run(self):
        time.sleep(5)
        print("Hello form Thread")


if __name__ == " __main__":
    t = Run()
    t.start()
    t.join()
    print("le programe tourne en fond")

