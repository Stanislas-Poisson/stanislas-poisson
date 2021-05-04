#!/bin/bash

docker-compose pull --ignore-pull-failures
docker-compose build --force-rm --pull --no-cache
docker-compose up -d --remove-orphans

if [ ! -f .env ]; then
    cp .env.example .env
fi

CMD="chown -R 1000:www /var/www && "
CMD+="chmod -R 0777 /var/www/storage /var/www/bootstrap && "

CMD+="composer install --no-progress --profile --no-interaction --prefer-dist --optimize-autoloader && "

if [ ! -L node_modules ]; then
    CMD+="yarn install --ignore-engines && "
else
    CMD+="yarn install --ignore-engines --frozen-lockfile && "
fi
CMD+="npx browserslist@latest --update-db && "
CMD+="yarn development && "

CMD+="php artisan ide-helper:generate && "
CMD+="php artisan ide-helper:meta && "

CMD+="php artisan migrate && "
CMD+="php artisan db:seed && "

if [ ! -L public/storage ]; then
    CMD+="php artisan storage:link && "
fi

CMD+="chown -R 1000:www /var/www && "
CMD+="chmod -R 0777 /var/www/storage /var/www/bootstrap/cache && "
CMD+="rm -Rf storage/logs/*"

docker-compose run --rm app bash -c "$CMD"

docker-compose up -d app
docker-compose up -d
