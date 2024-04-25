# Online-Shop-Demo
A website created using PHP and MySQL.

<div align="right"><b></b></div>

## Installation and Setup Guide
Before you start, you need to install XAMPP first. XAMPP is a package that integrates Apache (web server), PHP (server-side language), Perl (programming language), and MariaDB (database), making it easy to quickly set up a website through XAMPP. Please follow the steps below in order.

#### Step 1: Install XAMPP
＃ Please choose the appropriate version according to your operating system
1. Installation Link : https://www.apachefriends.org/zh_tw/download.html

  
2. After the installation, you can enter the installation program
   
![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/ec7f24fb-08f0-4fee-a86f-1506bdd3cae0)


The next step is to select the software you want to install; the default is to select all, let me explain briefly:

- FileZila FTP Server: For file transfer, if you want users to upload and download files, you'll need this.

- Mercury Mail Server: An electronic mail system, used when you need to send and receive emails from the server.

- Tomcat: Used for .jsp structured web pages.

- phpMyAdmin: A graphical user interface for MySQL, a must-have, really very convenient.

- Webalizer: A log recorder and analysis program for the server.

- Fake Sendmail: Used in conjunction with the Mail Server, it's a virtual email system.

#### Step 2: Run XAMPP
＃ The first time you use it, you need to choose the language.

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/73c4c66b-9237-4d68-8250-c13655a37f5c)


As shown in the image below, this is the XAMPP Control Panel, after which you can begin using the XAMPP web server tools.

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/306250f5-6d2f-4d0e-8cfa-eb892cc77feb)


Next, let's try to start Apache and MySQL. When the message window below finishes running and both Apache and MySQL show up in green, it means they have started successfully.

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/c64d3aa4-1745-4ff7-b8b3-d7c77ca626b3)

Click the 'Admin' button of Apache to test whether the Apache server can run normally (or you can also enter 'http://localhost' in the browser's address bar).

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/20bfca60-ba10-42f4-9813-ce070eb49557)

＃ If you can open the Apache Friends page without any problems, it means that Apache Server is working correctly.

Then check if MySQL is working properly.

As shown in the picture below, click “Admin” to manage the database (or type 'http://localhost/phpmyadmin' in the address bar of your browser) to open the webpage.

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/1a3cf07d-21aa-4d97-8b3b-0c98da7591bb)


![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/0588884a-e98f-4ca3-ad7a-1fac25bd6cdc)

＃ If you can see the MySQL console, it means MySQL is working properly.

#### Step 3: Setting Up MySQL Login Authentication
1. Find phpMyAdmin in Apache's config and open the configuration file

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/a4979122-4069-4cf4-b6a0-358cc728cbad)


2. Then find the following paragraph

   ＃ By opening the config.inc.php file of phpMyAdmin, you can see the default authentication mode is 'config', which is the least secure authentication mode. It is recommended to change it to 'cookie' or 'http'.

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/061dd13d-f89a-4a8a-b720-3ca67403f198)


3. After restarting, you can go to the MySQL control page, and upon entering, a login window should appear. The default username is 'root' and the password is left blank.

   
![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/d30b4117-4c8d-44b1-9733-87e2ddba52c5)

   ##### The administrator account, root does not set a password. It is recommended to set a password to improve the security of the database.
   
   
![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/8043230c-e78b-4079-bbdf-3baf924d8c0a)

##### At this point, the basic setup is about complete.

## Create Databases and Tables
You can create a database and tables, as well as populate them with data based on my 'create_gem_table.php' and 'create_gem_data.php' files.

## Different Page Display
The following shows the interface of different pages

1. Index.php
   
![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/9500ac5e-8594-4b53-9d52-5527b84e360c)

2. login.php

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/b339f810-1212-428b-b1d6-a5ae821c7ca5)

3. order.php
   
＃ Clicking on the corresponding product in Index.php will bring up the order page.

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/4c7b3964-9f39-49ec-98cf-1e924bc2cb11)

5. allOrders.php
   
＃ Only logged in staff account can access this page.

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/f77454ce-9ece-4a0d-8575-76d168b2b4dc)

5. about.php

![image](https://github.com/ffu1332/Online-Shop-Demo/assets/116335226/ed2ac7b8-8891-4dc7-a504-861dbf7d56df)

## Conclusion
In this Project, PHP, the Apache Web server, and MySQL Database used to create a website.


<div align="right">
  <a href="#Online-Shop-Demo"><b>↥ back to top</b></a>
</div>
