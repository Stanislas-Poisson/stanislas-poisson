#!/bin/bash

CMD="cp .env .env.bak && "
CMD+="cp .env.test .env && "
CMD+="composer run-script renew-app && "
CMD+="vendor/bin/phpunit --stderr --colors=never && "
CMD+="cp .env.bak .env && "
CMD+="rm -f .env.bak && "
CMD+="composer run-script renew-app"

docker-compose run --rm app bash -c "$CMD"
