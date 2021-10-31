#!/bin/bash
sudo pwd

cd /home/ubuntu/vomerc_laravel
npm install
npm run prod
composer install --no-dev --no-interaction --prefer-dist