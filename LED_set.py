import argparse
from sense_hat import SenseHat

sense = SenseHat()

parser = argparse.ArgumentParser(description="Ustawianie koloru pixela")
parser.add_argument('-x',action='store',type=int,choices=range(0,8),default=0,help="Pozycja x")
parser.add_argument('-y',action='store',type=int,choices=range(0,8),default=0,help="Pozycja y")
parser.add_argument('-r',action='store',type=int,choices=range(0,256),default=0,help="Kolor czerwony")
parser.add_argument('-g',action='store',type=int,choices=range(0,256),default=0,help="Kolor zielony")
parser.add_argument('-b',action='store',type=int,choices=range(0,256),default=0,help="Kolor niebieski")
parser.add_argument('-C',action='store',type=int,default=0,help="Czyszczenie ledow")

args = parser.parse_args()

if(args.C == 1):
    sense.clear()
else:
    sense.set_pixel(args.x,args.y,args.r,args.g,args.b)
