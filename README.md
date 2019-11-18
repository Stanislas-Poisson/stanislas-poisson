# Stanislas-Poisson

| Branche | Status | Code Coverage |
| ------- | ------ | ------------- |
| Master | [![pipeline status](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/badges/master/pipeline.svg)](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/commits/master) | [![coverage report](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/badges/master/coverage.svg)](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/commits/master) |
| Develop | [![pipeline status](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/badges/develop/pipeline.svg)](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/commits/develop) | [![coverage report](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/badges/develop/coverage.svg)](https://gitlab.com/Stanislas-Poisson/stanislas-poisson/commits/develop) |

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
  - yarn
- a MySQL 5.7 database and a user with the `SUPER` priviledge on it
- a Redis database

## How to run

- install Docker and Docker Compose
- `cp .env.exemple .env` and customize `.env`
- `php artisan key:generate`
- `make start`

Run `make help` to see the list of possible commands.

### Front development environment

Install of Livereload : https://github.com/JeffreyWay/laravel-mix/blob/master/docs/livereload.md

Then:
- `make ssh`
- `npm run watch-poll`

## Coding Style and Tests

You have to use coding rules on this projet, please use these commands to check or fix your code:

### Check
- `make cs` to check the coding style (with fixer and prettier)
- `make test` to execute the phpunit test
- `make test-cs` to execute both the make `cs` and `test`

### Fix
- `make fix` to apply the rules to your code
