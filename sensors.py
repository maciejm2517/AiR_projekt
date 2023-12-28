from sense_hat import SenseHat
import json
sense = SenseHat()
result = {}
pressure = sense.get_pressure()
temperature = sense.get_temperature()
humidity = sense.get_humidity()
orientation = sense.get_orientation()

result['pressure'] = pressure
result['temperature'] = temperature
result['humidity'] = humidity
result['orientation'] = orientation
json_out=json.dumps(result,indent=4)
print(json_out)