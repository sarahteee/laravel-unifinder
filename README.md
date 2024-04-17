# University and Country Management System

## Introduction

This project is a web-based application designed to manage information about universities and countries. It allows users to create, read, update, and delete (CRUD) details about universities and countries. The application is built using the Laravel framework.

## Features

- **University Management**: Users can manage university details such as names, images, and statistical data including the number of students and staff ratios.
- **Country Management**: Users can manage country details. The system allows for adding, editing, and deleting countries.
- **Authentication**:
  - The application includes a user authentication system.
  - CRUD functionalities for the Country model are restricted to authenticated users only, ensuring that anonymous users cannot access these sensitive operations.
- **Soft Deletes**: Both universities and countries can be 'soft deleted' and restored, providing a safe way to manage data without permanent loss.
- **Data Relationships**: The application handles relationships between countries and universities, such as associating universities with specific countries.

## Database Schema

### Universities Table

| Column                | Type         | Description                            |
|-----------------------|--------------|----------------------------------------|
| `id`                  | bigint       | Primary key, auto-increments           |
| `universityName`      | varchar(255) | Name of the university                 |
| `imageURL`            | varchar(255) | URL to an image of the university      |
| `country_id`          | bigint       | Foreign key to `countries` table       |
| `year`                | year         | Year the data was recorded             |
| `number_of_students`  | int          | Total number of students               |
| `student_to_staff_ratio` | float     | Ratio of students to staff             |
| `created_at`          | timestamp    | Record creation timestamp              |
| `updated_at`          | timestamp    | Record update timestamp                |
| `deleted_at`          | timestamp    | Soft delete timestamp (nullable)       |

### Countries Table

| Column                | Type         | Description                            |
|-----------------------|--------------|----------------------------------------|
| `id`                  | bigint       | Primary key, auto-increments           |
| `countryName`         | varchar(255) | Name of the country                    |
| `created_at`          | timestamp    | Record creation timestamp              |
| `updated_at`          | timestamp    | Record update timestamp                |
| `deleted_at`          | timestamp    | Soft delete timestamp (nullable)       |

## User Flow Images
### Login
<img src="laravel-unifinder-images/Screenshot 2024-04-17 at 7.51.53 AM.png" alt="Login Screenshot" width="400"/>

### Create - Universities
<img src="laravel-unifinder-images/Screenshot 2024-04-17 at 7.59.35 AM.png" alt="Create Screenshot" width="400"/>

### Read - University Details
<img src="laravel-unifinder-images/Screenshot 2024-04-17 at 7.58.41 AM.png" alt="Read Screenshot" width="400"/>

### Update - University Details
<img src="laravel-unifinder-images/Screenshot 2024-04-17 at 7.59.10 AM.png" alt="Update Screenshot" width="400"/>

### Delete - Universities
<img src="laravel-unifinder-images/Screenshot 2024-04-17 at 7.13.46 AM.png" alt="Delete Screenshot" width="400"/>

## Laravel & Project Thoughts

I found the process of learning PHP and Laravel enjoyable and intuitive, with less of a learning curve than other languages I've encountered. While developing this project, I faced several challenges and wished there could have been more time to apply better coding practices, enhance the styling, etc. As my interests lean more towards QA/software testing, I would have appreciated additional sessions focused on these areas.



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
