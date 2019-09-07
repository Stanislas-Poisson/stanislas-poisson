# Stanislas-Poisson

Master : [![pipeline status](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/badges/master/pipeline.svg)](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/commits/master)
Develop : [![pipeline status](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/badges/develop/pipeline.svg)](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/commits/develop)

This is a [Laravel 6.0](https://laravel.com/docs/6.0) app.

## Requirements

- PHP >= **7.2.0**
  - BCMath PHP Extension
  - Ctype PHP Extension
  - JSON PHP Extension
  - Mbstring PHP Extension
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension
- Node.js
- a MySQL 5.7 database and a user with the `SUPER` priviledge on it
- a Redis database

## How to run

- install Docker and Docker Compose
- `cp .env.test .env` and customize `.env`
- `php artisan key:generate`
- `make start`

Run `make help` to see the list of possible commands.

### Front development environment

Install of Livereload : https://github.com/JeffreyWay/laravel-mix/blob/master/docs/livereload.md

Then:
- `make ssh`
- `npm run watch-poll`
