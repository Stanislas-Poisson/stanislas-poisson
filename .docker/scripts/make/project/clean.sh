#!/bin/bash

CMD="rm -Rf public/build/* public/css/* public/js/* storage/debugbar && "
CMD+="composer run-script renew-app && "
CMD+="php artisan debugbar:clear && "
CMD+="php artisan event:clear"

docker-compose run --rm app bash -c "$CMD"
