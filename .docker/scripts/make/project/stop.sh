#!/bin/bash

if [ -f .env.bak ]; then cp .env.bak .env && rm -f .env.bak; fi
(docker ps -aq | xargs docker stop) || true
(docker ps -aq | xargs docker rm) || true
(docker volume ls -q | xargs docker volume rm) || true
(docker network ls -q | xargs docker network rm) || true
