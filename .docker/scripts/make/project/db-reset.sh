#!/bin/bash

CMD="php artisan migrate:fresh && "
CMD+="php artisan db:seed"

docker-compose run --rm app bash -c "$CMD"
