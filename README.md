# Malicious-USB-DROP-TEST

<h2> Disclaimer : THIS PROJECT IS CREATED IN ORDER TO HELP CYBER SECURITY PROFESSIONALS AND TO BE USED EDUCATIONAL PURPOSE ONLY. MAKE SURE TO BE LEGAL AND ANY MISUSE OF ANY CONTENT FROM THIS PROJECT WILL NOT BE TAKEN RESPONSIBILITY BY THE AUTHOR IN ANY MANNER </h2>

<h3> Script Execution </h3>

1) Checks for Internet Connection. If fail sleeps and tries until success
2) Run's simple powershell command and send output to Server instance configured with custom PHP script through POST Request.
3) PHP Script receives powershell command output through POST Request and sends data to attacker controlled SMTP Server.

