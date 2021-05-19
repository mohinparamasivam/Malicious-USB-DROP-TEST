# Malicious-USB-DROP-TEST

<h2> Disclaimer  </h2>
  
<p>
Scripts are for Education Purpusoses only and any attempt of damage or malicious activity performed using this script will not bring any liability to the author 
</p>


<h3> Script Execution </h3>

1) Checks for Internet Connection. If fail sleeps and tries until success
2) Run's simple powershell command and send output to Server instance configured with custom PHP script through POST Request.
3) PHP Script receives powershell command output through POST Request and sends data to attacker controlled SMTP Server.

