# Laravel Job Board

A job board web application built with **Laravel 13** and **Blade**.
This is a learning project — I'm building it step by step while learning Laravel, coming from a Node.js backend background.

> 🚧 **Status:** Work in progress

## Tech Stack

- **Backend:** Laravel 13 (PHP 8.3+)
- **Views:** Blade templates
- **Database:** SQLite (default) — MySQL supported via `.env`
- **Assets:** Vite

## Features

- [x] Project setup
- [x] Jobs listing page (route → controller → view)
- [ ] Jobs database table & Eloquent model
- [ ] Single job page
- [ ] Create / edit / delete jobs
- [ ] Form validation
- [ ] User authentication
- [ ] Employers & job ownership
- [ ] Pagination & search

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