<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

This application was made with laravel to simplify the development process of the application.

## Installation and Set-up
This installation procedure assumes that you have the following installed:
* Php 
* MySQL - Database
* Node.js

Download the repository and install the php packages required by using the command:

```
$ composer install
```
To install the necessary files for the html and css components run the following command:

```
$ npm install
```
To initialize the database connection configurations, copy the .env.example file as .env in the root directory.
You may use:
```
cp .env.example .env
```

Modify the .env file and replace the following parameters with your database configurations:

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=fstest

DB_USERNAME=root

DB_PASSWORD=

Run the following commands to set-up database schema and initialize the testuser
```
$ php artisan migrate
```

```
$ php artisan db:seed
```

At this juncture you are now ready to launch the application. Simply run the command:

```
php artisan serve
```

## Authentication
For the authentication component of the application, 
a package called laravel/ui was used. It has built-in components for authentication as well as the scaffolding for the design of the html components.

The username and password for the application is testuser and password respectively.

