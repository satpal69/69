Steps to Install and configure XAMPP server
⦁ download xampp
⦁ cd Downloads
⦁ sudo chmod +x xampp-linux-x64-8.2.0-0-installer.run
⦁ sudo ./xampp-linux-x64-8.2.0-0-installer.run
⦁ click on manage server
⦁ Start Apache server 
if not starting then check Apache service using following command :
sudo service apache2 status
sudo service apache2 stop
start apache
if problem occurs for Apache2 then configure and change port number 
to 81
 7) if not starting then check mysql service using following command :
 if problem occurs for mysql then click configure and change port 
number to 3307
start mysql
 
Steps to copy paste .php and .html files in htdocs folder 
⦁ To change the privilege of htdocs file do the following: Open new terminal
⦁ sudo su 
⦁ enter password 
⦁ chmod -R 777 /opt/lampp/htdocs 
⦁ After this copy and paste the .php file and .html file in htdocs 
⦁ Go into the browser 
⦁ localhost:81/phpmyadmin 
⦁ localhost:81/contact.html
