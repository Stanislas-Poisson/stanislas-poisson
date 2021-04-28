#!/bin/bash

CMD="vendor/bin/phpstan analyse --memory-limit=2G"

docker-compose run --rm app bash -c "$CMD"
