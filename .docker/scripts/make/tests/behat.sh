#!/bin/bash

TAGS=$1

cp .env .env.bak
cp .env.behat .env
bash ./.docker/scripts/store-access-database.sh
docker exec -t sk_sp_database bash ./scripts/export-all-data-of-database.sh

CMD="composer run-script renew-app && "
CMD+="yarn production && "
CMD+="php vendor/bin/behat --colors --strict -vvv --tags=$TAGS && "
CMD+="rm -Rf ./.docker/tmp-data/.mysqlenv ./.docker/tmp-data/export.sql && "
CMD+="cp .env.bak .env && "
CMD+="rm -f .env.bak && "
CMD+="composer run-script renew-app && "
CMD+="yarn development"

docker-compose run --rm app bash -c "$CMD"
