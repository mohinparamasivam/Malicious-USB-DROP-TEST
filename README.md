# Malicious-USB-DROP-TEST

<h2> Disclaimer : </h2>
  
<p>
This project is created in order to help cyber security professionals and to be used for educational purpose only. Make sure to have legal clearance to run it on any individuals PC. Any misuse of content from this project will not be taken responsibility by the author in any manner </h2>
</p>

<h3> Script Execution </h3>

1) Checks for Internet Connection. If fail sleeps and tries until success
2) Run's simple powershell command and send output to Server instance configured with custom PHP script through POST Request.
3) PHP Script receives powershell command output through POST Request and sends data to attacker controlled SMTP Server.

