import csv
import math



def get_x(width, lng):
    return int(round(math.fmod((width * (180.0 + float(lng) / 360.0)), (1.5 * width))))

#def get_y(width, height, lat):
    #lat_rad = lat * math.pi / 180.0
    #merc = 0.5 * math.log( (1 + math.sin(lat_rad)) / (1 - math.sin(lat_rad)) )
    #return int(round((height / 2) - (width * merc / (2 * math.pi))))

data = csv.reader(open('WiFi_Fingerprint_Training_Set copy 2.csv'))

for rows in data:
    count = 1
    for cols in rows:
        if(count==1):
            ssNOL = (float(cols)+90)/60
            print ssNOL
        #if(count==3):
            #print cols
            #print get_x(10000,cols)
        count=count+1

