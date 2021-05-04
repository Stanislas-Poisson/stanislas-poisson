


.DEFAULT_GOAL = help
.PHONY: help ssh design stop fix renew-app renew-rights ci check-files tests cs phpstan unit queue-listen clean db-reset docker-prune

include .env

INTERACTIVE_EXEC = docker exec -ti dk_sp_app
COMPOSE_HTTP_TIMEOUT = 300

help:	## Show this help
	@grep -h -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-20s\033[0m %s\n", $$1, $$2}'
	@echo ''

ssh:	## Acces to the dk_sp_app
	@$(INTERACTIVE_EXEC) bash

design:	## Acces to the dk_sp_app
	@$(INTERACTIVE_EXEC) bash -c "yarn watch-poll"

restart: stop start	## Execute stop and start

stop:	## Stop and clear the project
	bash ./.docker/scripts/make/project/stop.sh

start: stop	## Start the project
	bash ./.docker/scripts/make/project/start.sh

fix:	## Remove the .php_cs.cache, run the PHP-CS-Fixer and Prettier to fix the files
	bash ./.docker/scripts/make/project/fix.sh

renew-app:	## Renew the app
	bash ./.docker/scripts/make/project/renew-app.sh

renew-rights:	## Renew the rights for the projects
	bash ./.docker/scripts/make/project/renew-rights.sh

ci:	check-files tests	## Run the check-files and tests pipelines

check-files:	cs phpstan	## Run the PHP-CS-Fixer and Prettier with PHPstan pipelines

tests:	unit	## Run the PHPUnit

cs:	## Run the PHP-CS-Fixer and Prettier pipeline
	bash ./.docker/scripts/make/tests/cs.sh

phpstan:	## Run the PHPstan pipeline
	bash ./.docker/scripts/make/tests/phpstan.sh

unit:	## Run the PHPUnit pipeline
	bash ./.docker/scripts/make/tests/unit.sh

queue-listen:	## Show the queue listen by artisan through docker
	bash ./.docker/scripts/make/project/queue-listen.sh

clean:	## Clean the Laravel cache, view, config, route and delete some directories
	bash ./.docker/scripts/make/project/clean.sh

dist-clean: clean	## In addition to "clean" delete the node_modules and vendor directories
	bash ./.docker/scripts/make/project/dist-clean.sh

db-reset:	## Rebuild, migrate and seed the database
	bash ./.docker/scripts/make/project/db-reset.sh

docker-prune:	## Prune the system
	docker system prune -af
