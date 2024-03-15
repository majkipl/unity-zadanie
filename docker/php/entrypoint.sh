#!/bin/bash

chown -R www-data:www-data /var/www/html
chmod -R 777 /var/www/html

composer install --no-interaction --no-progress

exec docker-php-entrypoint apache2-foreground
