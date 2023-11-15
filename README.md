<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Table of Contents

- [About this project](#about-this-project) 📚
- [Installation](#installation) 🛠️
  - [Download the project files](#download-the-project-files-) 📥
  - [Change into the project directory](#change-into-the-project-directory-) 📂
  - [Run Composer to install the project dependencies](#run-composer-to-install-the-project-dependencies-) 🚀
  - [Set up the environment variables](#set-up-the-environment-variables-%EF%B8%8F) ⚙️
  - [Apply the database migrations](#apply-the-database-migrations-%EF%B8%8F) 🗃️
  - [Seed the database with initial data](#seed-the-database-with-initial-data-) 🌱
- [Configuration](#configuration) ⚙️
- [Run](#run) 🚀

## Table of Contents

- [About this project](#about-this-project) 📚
- [Installation](#installation) 🛠️
- [Configuration](#configuration) 🛠️
- [Run](#run) 🚀

## About this project

This is an innovative E-learning website where students can easily sign up using their email addresses and gain access to a wealth of educational videos. To ensure security and authenticity, students must activate their accounts by entering an activation code provided by their respective teachers.

One of the standout features of our platform is our utilization of Bunny CDN, which provides robust protection against potential video theft or unauthorized access. This means that your educational content is safe and only accessible to those who have the proper authorization.

Additionally, the admin of the platform has full control and oversight over every aspect of the system. This includes the ability to manage and organize video content, edit student details, as well as generate and delete activation codes for student verification. With this level of administrative control, you can ensure the smooth operation and security of your e-learning platform.

## Installation

### Download the project files 📥

```
git clone https://github.com/moazelgandy2/e-learn
```

## Change into the project directory 📂

```
cd e-learn
```

## Run Composer to install the project dependencies 🚀

```
composer install
```

## Set up the environment variables ⚙️

<ul>
    <li>Rename .env.example to .env</li>
    <li>Edit the .env file and add your database connection details.</li>
</ul>

## Apply the database migrations 🗃️

```
php artisan migrate
```

This command will create or update the database tables according to the defined migrations in the `database/migrations` directory.

## Seed the database with initial data 🌱

```
php artisan db:seed
```

This command will populate the database with initial records.

## Configuration

Change the `$AccessKey`, `$libraryId`, and `$cdnUrl` in the Videos controller:

```
private $AccessKey = 'REPLACE-WITH-YOUR-ACCESS-KEY';
private $libraryId = 'REPLACE-WITH-YOUR-ID';
private $cdnUrl = 'REPLACE-WITH-YOUR-CDN-URL';
```

## Run 🚀

```
php artisan serve
```

You can now access the project by visiting http://127.0.0.1:8000 in your web browser, and the admin dashboard is available at http://127.0.0.1:8000/admin.
