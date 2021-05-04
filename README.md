# Stanislas Poisson

This repository is intended to manage my website and thus show my resume.

**About me**  
Looking for a developer?
It's a good thing! Passionate about the web world, I have acquired skills through my professional and self-taught experiences.
I like to discover, learn and experiment web development and web-design as I go along.

**My recipe ?**  
Take knowledge in the following areas:
Back-end 95%, Front-end 75%, Server 50%.
Sprinkle a good pinch of curiosity on the whole.
Mix it all in an unconventional mold and heat it on a creative fire and you get a Full-Stack developer.

**For info ;)**  
34 years old, and happy father of two children. Living in Tours, France I am mobile in and around the agglomeration via public transport.

---
## Project

[![Master CI](https://img.shields.io/github/workflow/status/Stanislas-Poisson/stanislas-poisson/CI/master?label=Master%20CI)](https://github.com/Stanislas-Poisson/stanislas-poisson/actions/workflows/ci.yml)
[![Develop CI](https://img.shields.io/github/workflow/status/Stanislas-Poisson/stanislas-poisson/CI/develop?label=Develop%20CI)](https://github.com/Stanislas-Poisson/stanislas-poisson/actions/workflows/ci.yml)

[![Changelog](https://shields.io/badge/-Changelog-lightgrey?logo=Textpattern&style=flat)](Changelog.md)
[![Security](https://shields.io/badge/-Security-yellow?logo=Let%E2%80%99s%20Encrypt&style=flat)](Security.md)
![GitHub issue custom search in repo](https://img.shields.io/github/issues-search/stanislas-poisson/stanislas-poisson?label=Issues&query=is%3Aopen)
![GitHub language count](https://img.shields.io/github/languages/count/stanislas-poisson/stanislas-poisson?label=Languages)
[![Discord](https://img.shields.io/discord/839222968508612658?label=Discord)](https://discord.gg/hmVTv7FGVK)

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

- we're using the docker image from the registry of [kuroi-taiyo/docker-store](https://gitlab.com/kuroi-taiyo/docker-store)
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
- `make tests` Run the PHPUnit
- `make cs` Run the PHP-CS-Fixer and Prettier pipeline
- `make phpstan` Run the PHPstan pipeline
- `make unit` Run the PHPUnit pipeline

#### Fix
- `make fix` to apply the rules to your code

## Update dependencies
### Using the provided Docker-based Makefile
- `make ssh`
- `composer update --no-progress --profile --no-interaction --prefer-dist --optimize-autoloader` to update the composer dependencies based on the composer.json
- `yarn upgrade-interactive --latest` to update the node modules dependencies based on the package.json
Please keep in mind that these updates may break the build, so update them carefully and feel free to restart the front build at each update.
