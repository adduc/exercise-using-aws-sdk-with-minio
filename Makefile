test/node:
	docker compose run --rm node

test/php:
	docker compose run --rm php

rm:
	docker compose down