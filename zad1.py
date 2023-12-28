from sense_hat import SenseHat
import json
sense = SenseHat()
pressure = sense.get_pressure()
json_pressure=json.dumps(pressure,indent=4)
print(json_pressure)
