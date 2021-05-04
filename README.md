# Stanislas Poisson

| Branche | Status |
| ------- | ------ |
| Master | [![CI](https://github.com/Stanislas-Poisson/stanislas-poisson/actions/workflows/ci.yml/badge.svg?branch=master)](https://github.com/Stanislas-Poisson/stanislas-poisson/actions/workflows/ci.yml) |
| Develop | [![CI](https://github.com/Stanislas-Poisson/stanislas-poisson/actions/workflows/ci.yml/badge.svg?branch=develop)](https://github.com/Stanislas-Poisson/stanislas-poisson/actions/workflows/ci.yml) |

This is a [Laravel 8.x](https://laravel.com/docs/8.x) app.

## Requirements

- Docker
- Docker-compose
- Make
- PHP >= 7.4.12
  - OpenSSL PHP Extension
  - PDO PHP Extension
  - Mbstring PHP Extension
  - Tokenizer PHP Extension
  - XML PHP Extension
  - Ctype PHP Extension
  - JSON PHP Extension
  - BCMath PHP Extension
  - PCNTL PHP Extension
- Node.js 14.X
  - yarn
- A MySQL 5.7 database and a user with the `SUPER` priviledge on it
- A Redis 6.0 database

## How to run

### Using the provided Docker-based Makefile

- require access to [kuroi-taiyo/docker-store](https://gitlab.com/kuroi-taiyo/docker-store)
- install Docker and Docker Compose
- login to the registry `docker login registry.gitlab.com` with your login and password or auth token _(with a `read_registry` at least better for manager with `write_registry`)_  
This is needed due to the restrictions of hub.docker.com
- `cp .env.example .env`
- if needed customize `.env` - _the content was already set for the docker dev usage_
- `make start`

Run `make help` to see the list of possible commands.

### Front development environment

Install of Livereload : https://github.com/JeffreyWay/laravel-mix/blob/master/docs/livereload.md

Then:
- `make design`

### Manually

- `cp .env.example .env` and customize `.env`
- `composer install --no-progress --profile --no-interaction --prefer-dist --optimize-autoloader`
- `yarn install --ignore-engines --frozen-lockfile` - _remove the `--frozen-lockfile` for the first install_
- `npx browserslist@latest --update-db`
- `yarn run development`
- `php artisan ide-helper:generate`
- `php artisan ide-helper:meta`
- `php artisan migrate:fresh --force`
- `php artisan db:seed`
- `php artisan blog:store_latest`
- `php artisan storage:link`

Then, use [Homestead](https://laravel.com/docs/master/homestead), `php artisan serve` or whatever to serve the app.

## Coding Style and Tests

You have to use coding rules on this projet, please use these commands to check or fix your code:

### Using the provided Docker-based Makefile
#### Check
- `make ci` Run the checks-files and tests pipelines
- `make checks-files` Run the PHP-CS-Fixer and Prettier with PHPstan pipelines
- `make tests` Run the PHPUnit, Behat pipelines
- `make behat` Run the Behat goutte and Behat javascript pipelines
- `make cs` Run the PHP-CS-Fixer and Prettier pipeline
- `make phpstan` Run the PHPstan pipeline
- `make unit` Run the PHPUnit pipeline
- `make behat-goutte` Run the Behat goutte pipeline without @javascript tag
- `make behat-javascript` Run the Behat javascript pipeline with @javascript tag
- `make behat-wip` Run the Behat goutte and Behat javascript pipeline with @wip tag
- `make behat-list` Get all the commande availables with behat
- `make behat-passed` Run the Behat specific pipeline without @passed tag

#### Fix
- `make fix` to apply the rules to your code

## Update dependencies
### Using the provided Docker-based Makefile
- `make ssh`
- `composer update --no-progress --profile --no-interaction --prefer-dist --optimize-autoloader` to update the composer dependencies based on the composer.json
- `yarn upgrade-interactive --latest` to update the node modules dependencies based on the package.json
Please keep in mind that these updates may break the build, so update them carefully and feel free to restart the front build at each update.
