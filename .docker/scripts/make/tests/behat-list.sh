#!/bin/bash

LANG=$1

CMD="vendor/bin/behat --definitions l --lang=$LANG"

docker-compose run --rm app bash -c "$CMD"
