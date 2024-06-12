# Laravel Project

A simple Laravel project.

## About

This repository contains a basic Laravel project setup. It is intended as a starting point for building applications with Laravel.

## Technologies Used

- **Laravel**: A PHP framework for web artisans.
- **PHP**: Scripting language used in Laravel.
- **JavaScript**: For any client-side scripting.
- **Blade**: Laravel's templating engine.
- **CSS**: Styling for the project.

## How to Run the Project

### Prerequisites

- PHP installed on your machine.
- Composer installed on your machine.
- Node.js and npm installed on your machine.

### Installation

1. Clone the repository to your local machine.
   ```bash
   git clone https://github.com/joao-ga/laravel-project.git
   
2. Navigate to the project directory.

cd laravel-project

3. Install PHP dependencies.

composer install

4. Install JavaScript dependencies.

npm install

Configuration
1. Copy the example environment file and configure your environment variables.

cp .env.example .env

2. Generate an application key.

php artisan key:generate

Running the Application
To start the Laravel development server, use the following command:

php artisan serve
The application will be available at http://localhost:8000.

Project Structure
plaintext
Copiar código
.
├── app
├── bootstrap
├── config
├── database
├── public
├── resources
├── routes
├── storage
├── tests
├── .env.example
├── composer.json
├── package.json
└── (other files and directories)
License
This project is licensed under the MIT License. See the LICENSE file for details.
