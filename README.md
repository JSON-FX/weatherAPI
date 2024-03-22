
# Laravel Simple Weather App

This is a simple Laravel application that allows users to enter their name, email, and location to retrieve the current weather information for the specified location. The application uses the WeatherAPI to fetch weather data and Tailwind CSS for styling.




## Installation

Install Dependencies

```bash
  composer install
```

## Create a new .env and simply copy .env.example's content.

Generate a key

```bash
  php artisan key:generate
```

database migration

```bash
  php artisan migrate
```
SQLite Database will create database/database.sqlite for the first time. Just select 'YES'

Install Node Packages

```bash
  npm install
```

Finally run

```bash
  npm run dev
```

```bash
  php artisan serve
```

Now your Laravel application is set up with Tailwind CSS, and you can use Tailwind classes in your views.

Usage
  1. Open your web browser and visit http://localhost:8000.
  2. Fill in the form with your name, email, and location.
  3. Click the "Get Weather" button.
  The application will display the current weather information for the       specified location.

This project is open-source and available under the MIT License.
