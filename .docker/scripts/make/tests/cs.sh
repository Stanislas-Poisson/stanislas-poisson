#!/bin/bash

CMD="rm -f .php_cs.cache || true && "
CMD+="php-cs-fixer fix --config=.php_cs --using-cache=no --dry-run --diff && "
CMD+="prettier --check 'resources/**/*.+(js|json|scss|sass|css|vue)' '.babelrc' 'composer.json' 'package.json' 'webpack.mix.js'"

docker-compose run --rm app bash -c "$CMD"
