SERVICE=PHP
COMMAND=/bin/bash

.PHONY: up down run exec
up:
	docker-compose up -d --build
down:
	docker-compose down
run:
	docker-compose run --rm ${SERVICE} ${COMMAND}
exec:
	docker-composer exec ${SERVICE} ${COMMAND}
