# Spark: WordPress Starter Kit

***

## Setup Instructions 

1) Download this repository without the GIT history to your local development environment and rename it for your project.

2) Download a fresh copy of [WordPress](https://wordpress.org/download/).

3) Unzip the wordpress file, rename the wordpress directory to `core`, and move it inside of this repository's directory in `/public`.

4) Create a new **development.php** environment configuration file in `/config/env/` based off a copy of **/config/env/sample.php** and fill in the required details. Other developers working off new project instance can create a **local.php** if they require more customized settings in their config than what the project instance and **development.php** specifies.

5) In the root directory, create an **.htaccess** file and add the following line:

```
SetEnv APPLICATION_ENV development
```

Set to `development`, `staging` or `production` depending on environment.

6) In the **public/** directory, create an **.htaccess** file and add the following snippet:

```
# BEGIN WordPress
<IfModule mod_rewrite.c>
  RewriteEngine On
  RewriteBase /
  RewriteRule ^index\.php$ - [L]
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule . /index.php [L]
</IfModule>
# END WordPress
```

7) On your local computer, make sure to edit the **hosts** file, and add the domain name for the project that matches what is defined in **/config/env/development.php**:

```php
// /config/env/development.php

define('WP_HOME', 'http://project-name.dev');

```

```shell
# /etc/hosts

# Specified IP is defined in the Vagrantfile
192.168.XX.XX project-name.dev

```

8) Connect to the MySQL database, either via `vagrant ssh` or using SequelPro and create a new database that corresponds to the database table name defined in the **development.php** file.



### Vagrant Setup Instructions

After running `vagrant up` and ssh-ing into the vagrant machine using `vagrant ssh`, you need to modify the location specified for the document root, so that Apache knows to refer to the **public** directory and where to find the **index.php** file.

Using your terminal editor of choice, edit the **192.168.XX.XX.xip.io.conf** located at `/etc/apache2/sites-available/` and append `public` to the `DocumentRoot` path statements (there should be two):

```
DocumentRoot /vagrant/public
```

Then reload Apache's configuration:

```shell
$ sudo service apache2 reload
```
