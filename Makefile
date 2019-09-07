# 1N73LL1G3NC3 15 7H3 4B1L17Y 70 4D4P7 70 CG4NG3.
# - 57PH3N H4WK1NG

.DEFAULT_GOAL = help
.PHONY: help start stop down up reload ssh build install composer node front chown-dir migration seed clearLogs test cs test-cs fix clean dist-clean db-reset queue-listen docker-prune

include .env

PROJECT = stanislaspoisson
COMPOSE = docker-compose -p $(PROJECT)
RUN = $(COMPOSE) run --rm fpm
EXEC = docker exec -ti $(PROJECT)_fpm_1
COMPOSE_HTTP_TIMEOUT = 300

help:	## Show this help
	@grep -h -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'
	@echo ''

start: build install	## Start the project
	$(COMPOSE) up -d fpm
	$(COMPOSE) up -d

stop:	## Stop and clear the project
	docker ps -f name=$(PROJECT) -aq | xargs docker stop
	docker ps -f name=$(PROJECT) -aq | xargs docker rm
	docker volume ls -f name=$(PROJECT) -q | xargs docker volume rm
	docker network ls -f name=$(PROJECT) -q | xargs docker network rm

down:
	$(COMPOSE) stop

up:
	$(COMPOSE) up -d fpm
	$(COMPOSE) up -d

restart: stop start	## Execute stop and start

ssh:	## Acces to the app
	@$(EXEC) bash

build:	## Pull and build the containers
	$(COMPOSE) pull --ignore-pull-failures
	$(COMPOSE) build --force-rm --pull

install: composer node front chown-dir seed clearLogs

composer:	## Install or update the composer dependencies
	$(RUN) composer install --no-interaction --prefer-dist --optimize-autoloader

node:	## Install or update the node dependencies
	$(RUN) npm install --ignore-engines

front:	## Run the buil for the front
	$(RUN) npm run dev

chown-dir:	## Change the directory owner and access
	if [ ! -L public/storage ]; then $(RUN) php artisan storage:link; fi
	$(RUN) chgrp -R www-data /var/www/html
	$(RUN) chmod -R 0777 /var/www/html/docker/apache/logs /var/www/html/storage /var/www/html/bootstrap/cache

migration:	## Artisan migrate through docker
	$(RUN) php artisan migrate

seed: migration	## Artisan migrate then seed through docker
	$(RUN) php artisan db:seed

clearLogs:	## Clear the logs for the new run
	$(RUN) rm -f storage/logs/*

test: ## Run the PHPUnit
	$(RUN) vendor/bin/phpunit --stderr

cs: ## Run the PHP-CS-Fixer and Prettier
	$(RUN) php artisan fixer:fix --no-interaction --dry-run --diff --using-cache=no
	$(RUN) prettier --check "resources/**/*.+(js|json|vue|scss)"

test-cs: cs test ## Run the PHP-CS-Fixer, Prettier and PHPUnit

fix: ## Run the PHP-CS-Fixer and Prettier to fix the files
	$(RUN) php artisan fixer:fix --using-cache=no
	$(RUN) prettier --write  "resources/**/*.+(js|json|vue|scss)"

clean:	## Clean the Laravel cahce, view, config, route and delete some directories
	$(RUN) rm -rf public/build/* public/css/* public/js/* storage/debugbar
	$(RUN) php artisan cache:clear
	$(RUN) php artisan view:clear
	$(RUN) php artisan config:clear
	$(RUN) php artisan route:clear
	$(RUN) npm run dev

dist-clean: clean	## In addition to "clean" delete the node_modules and vendor directories
	$(RUN) rm -rf node_modules vendor/*

db-reset:	## Rebuild, migrate and seed the database
	$(RUN) php artisan migrate:reset
	$(RUN) php artisan migrate
	$(RUN) php artisan db:seed

queue-listen:	## Show the queue listen by artisan through docker
	$(RUN) php artisan queue:listen

docker-prune:	## Prune the system
	docker system prune -af
