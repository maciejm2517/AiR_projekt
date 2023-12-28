import argparse
import json
from sense_hat import SenseHat

sense = SenseHat()

parser = argparse.ArgumentParser(description="Wybor odpowieniego sensora")
parser.add_argument('-r',action='store_true',help="Roll")
parser.add_argument('-p',action='store_true',help="Pitch")
parser.add_argument('-y',action='store_true',help="Yaw")
pressure = sense.get_orientation()

json_pressure=json.dumps(pressure,indent=4)
print(json_pressure)

