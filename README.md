<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Laravel Job Board

A job board web application built with **Laravel 13** and **Blade**.
This is a learning project — I'm building it step by step while learning Laravel, coming from a Node.js backend background.

> 🚧 **Status:** Work in progress

## Tech Stack

- **Backend:** Laravel 13 (PHP 8.3+)
- **Views:** Blade templates
- **Database:** SQLite (default) — MySQL supported via `.env`
- **Assets:** Vite

## Getting Started

### Requirements

- PHP 8.3+
- Composer
- Node.js & npm

### Installation

```bash
# Clone the repository
git clone https://github.com/ali98nadhum/laravel-job-board.git
cd laravel-job-board

# Install dependencies
composer install
npm install

# Create the environment file
cp .env.example .env        # on Windows (PowerShell): copy .env.example .env

# Generate the app key
php artisan key:generate

# Run database migrations
php artisan migrate
```

### Running the App

```bash
composer run dev
```

Then open [http://localhost:8000](http://localhost:8000) in your browser.

## Project Structure

| Path | Description |
|---|---|
| `routes/web.php` | Web routes |
| `app/Http/Controllers/` | Controllers |
| `app/Models/` | Eloquent models |
| `resources/views/` | Blade views |
| `database/migrations/` | Database migrations |

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).