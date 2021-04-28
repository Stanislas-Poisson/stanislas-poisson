#!/bin/bash

CMD="php artisan queue:listen"

docker-compose run --rm app bash -c "$CMD"
