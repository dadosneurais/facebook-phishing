It's for education purpose only.

As you know, you can use the setoolkit to clone the facebook's page. 


If you are using kali you need to start the server.
1. sudo su
2. setoolkit
3. 1) Social-Engineering Attacks
   2) Website Attack Vectors
   3) Credential Harvester Attack Method
   4) Site Cloner
4. You stay with your ip, pressing enter
5. Enter the url to clone: http://facebook.com


In my case, it wasn't working properly. Thus, I've created the facebook html, css and the php to capture the datas.
After trying to access with the html page the phishing.php will create a file.txt and save the login and pass.

example:
systemctl start apache2

Save the files inside the /var/www/html/
change the html name to: index.html

The configuration is all done. Now you gotta to access your ip machine, example: 192.168.1.10
The page will be loaded on the browser.

If you didn't change the file name, you gotta to add the filename in the end, example: 192.168.1.10/phishing.html

that is it, folks!
