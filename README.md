# Malicious-USB-DROP-TEST

<h2> Disclaimer  </h2>
  
<p>
Scripts are for Education Purpusoses only and any attempt of damage or malicious activity performed using this script will not bring any liability to the author 
</p>


<h2> Script Execution </h2>

1) Checks for Internet Connection. 
2) Backgrounds process and checks for internet connection till succeeds.
3) Run's  powershell command and send output to Server instance configured with custom PHP script through POST Request.
4) PHP Script receives powershell command output through POST Request and sends data to attacker controlled SMTP Server.


<h2> Integration </h2>

<p> Can be combined with https://github.com/mohinparamasivam/SMTP-Invoke-Credentials-Phish for better results </p>
