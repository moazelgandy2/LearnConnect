<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About this project 
This is an innovative E-learning website where students can easily sign up using their email addresses and gain access to a wealth of educational videos. To ensure security and authenticity, students must activate their accounts by entering an activation code provided by their respective teachers.

One of the standout features of our platform is our utilization of Bunny CDN, which provides robust protection against potential video theft or unauthorized access. This means that your educational content is safe and only accessible to those who have the proper authorization.

Additionally, the admin of the platform has full control and oversight over every aspect of the system. This includes the ability to manage and organize video content, edit student details, as well as generate and delete activation codes for student verification. With this level of administrative control, you can ensure the smooth operation and security of your e-learning platform.

## Installation
1-Download the project files

```bash
git clone https://github.com/moazelgandy2/e-learn
```
2-Change into the project directory:
```bash
cd e-learn
```
3-Run Composer to install the project dependencies:
```bash
composer install
```
4-Edit .env file and add your DataBase connectiondetails.

5-Run the following command to apply the database migrations:
```bash
php artisan migrate
```
This command will create or update the database tables according to the defined migrations in the database/migrations directory.

6-To seed the database with initial data, run:
```bash
php artisan db:seed
```
This command will populate the database with initial records.

## Usage
```bash
php artisan serve
```
You can now access the project by visiting <http://127.0.0.1:8000> in your web browser, and the admin dashboard is available at <http://127.0.0.1:8000/admin>.
