a = "kawasaki"
b = "nwm"
c = "1939"

class Motor:
    def __init__(self,a,b,c):
        self.nazwa = a
        self.model = b
        self.rok = c
    def display_info(self):
        print(self.nazwa, self.model, self.rok)
        
motor = Motor(a,b,c)
motor.display_info()
