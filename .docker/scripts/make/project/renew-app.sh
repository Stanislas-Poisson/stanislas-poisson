#!/bin/bash

CMD="composer run-script renew-app"

docker-compose run --rm app bash -c "$CMD"
