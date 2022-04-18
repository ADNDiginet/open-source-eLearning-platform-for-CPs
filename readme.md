# E-learning Platform For CPs
[![Adn DigiNet Ltd](https://adndiginet.com/wp-content/uploads/2021/12/Group-1799-1.svg)](https://adndiginet.com)

# Setup on Cpanel
Login to your Cpanel and go to the **MySql Databases** section and create a new database **elearning**.
While you are here, you should also create a database user **elearnuser** and grant that user all permissions for **elearning** database.

## Download the project
Download the project from this repository and unzip the file.
In the project folder copy the **config-dist.php** to **config.php**.

Open and update **config.php** as follows:
```
<?php
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'your database name'; //elearning
$CFG->dbuser    = 'your database user name'; //elearnuser
$CFG->dbpass    = 'your database password'; //yourPassword
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'project directory path'; //'Cpanel Domain or Ip'
$CFG->dataroot  = 'project directory path'; //"/home/<Cpanel username>/projectData";
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');
```

## Uploading to Cpanel
Upload the project directory to the **public_html** directory on your Cpanel.
Copy the **projectData** folder to **/home/<Cpanel username>/projectData**.
Go to phpMyAdmin on your Cpanel and import the **data-dump.sql** file in the project folder to your **elereaning** database.

> Now the project sould be accessable at the Cpanel domain/ip.


# Setup on Linux Desktop or Server
Open a terminal window on ubuntu Desktop or log into the terminal on Server. 
Become root and install some additional software (git and php extras Moodle needs):
```
sudo su  (you will need to enter your password)
apt-get update
apt-get install git git-core git-doc
apt-get install php-gd php-curl php-intl php-xmlrpc
apt-get install php mysql-server mysql-client apache2  php-mysql
apt-get install php-json
```
> (on Desktop) open a web browser and go to http://localhost/ and make sure you see 'It works!'.
> (on Server) open a web browser on a remote machine and go to http://name.or.ip.of.server/ and make sure you see 'It works!'.

## Install Project code
We're going to use Git to pull the latest code. You could just download it, but this is more fun! Still as superuser *('sudo su' from before)*:

```
cd /var/www
git clone https://github.com/ADNDiginet/open-source-eLearning-platform-for-CPs.git .
chmod 0777 /var/www
```

>The code location (for installation) is /var/www (assuming your are only going to run this project for desktop. So please backup your /var/www beforehand if you are using it for other sites).

## Create the data area
You can put this where ever you like (more or less) but I will do it like so(assuming you are still superuser)...

```
mv /var/www/projectData /var/projectData
chmod 0777 /var/projectData
```

>The data location (for installation) is /var/projectData

## Create the database
You will need the root database password. Unless you have changed it, this is same as your login password (or whatever you set up when you installed MySQL above).

```
mysql -u root -p
(asks for password here)
mysql> create database elearning default character set utf8;
mysql> grant all on elearning.* to elearnuser@localhost identified by 'yourPassword';
mysql> exit

mysql -u elearnuser -p elearning < /var/www/data-dump.sql
(asks for password here)
```
### Notes:
> Don't type 'mysql>', that's just the prompt from the mysql client.
> The grant command creates the MySQL account 'elearnuser' with the supplied password and gives it rights to the 'elearning' database all in one command.
> Set 'yourPassword' to something you make up. This is the password for your 'elearning' database.
> When you install the database is called 'elearning', the database user 'elearnuser' and the password as above.

## Configure apache
The standard configuration of Apache on Ubuntu should work fine and will give you a URL of http://name.or.ip.of.server (or http://localhost).

> If you need other configurations or a different form of URL, now is the time to configure this. However, this is not covered here. There is lots of information online, although do note that the Ubuntu Apache configuration is rather different to the standard layout.

## Updating the Configuaration
Next you need to update the project configuaration to the settings we just created like so(assuming you are still superuser):

```
cp /var/www/config-dist.php /var/www/config.php
nano /var/www/config.php
```
This will show the contents of the file in an editor. The content should look something like this:
```
<?php
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'your database name'; //elearning
$CFG->dbuser    = 'your database user name'; //elearnuser
$CFG->dbpass    = 'your database password'; //yourPassword
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'project directory path'; //'http://localhost' on desktop or 'http://name.or.ip.of.server' on server
$CFG->dataroot  = 'project directory path'; //"/var/projectData";
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');
```
after updating the file with your database parameters, wwwroot & dataroot. Please save the file by pressing *ctrl+o* and then *enter/return* key.
Then press *ctrl+x* to exit the editor.

## And finally
Don't skip this step. This secures the project code, preventing it being overwritten by hackers.
```
chmod 0755 /var/www
exit
```

> Now the project sould be accessable at http://localhost or http://name.or.ip.of.server