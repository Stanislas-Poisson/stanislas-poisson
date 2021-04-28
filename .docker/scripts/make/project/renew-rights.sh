#!/bin/bash

CMD="chown -R 1000:www ./ && "
CMD+="chmod -R 0777 ./storage ./bootstrap/cache && "
CMD+="rm -Rf ./storage/logs/*"

docker-compose run --rm app bash -c "$CMD"
