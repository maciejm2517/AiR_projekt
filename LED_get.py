from sense_hat import SenseHat
import json
sense = SenseHat()
pixels=sense.get_pixels()
json_pixel=json.dumps(pixels,indent=4)
print(json_pixel)
