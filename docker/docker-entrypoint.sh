#!/bin/bash
set -e

if [ ! -d "/var/www/html/vendor" ]; then
  # Control will enter here if $DIRECTORY exists.
  cd /var/www/html/
  composer.phar install --prefer-source --no-interaction
fi

if [ ! -f "/var/www/html/.env" ]; then
  cd /var/www/html/
  cp .env.example .env
fi


apache2ctl -D FOREGROUND
exec "$@"
