#!/bin/bash
sudo pwd

npm install
npm run prod
composer install --no-dev --no-interaction --prefer-dist