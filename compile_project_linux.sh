#!/bin/bash
git clone https://github.com/tarasovc47/laravel-blog laravel &&
cd laravel &&
docker-compose build app &&
docker-compose up -d &&
docker-compose exec app composer install &&
docker-compose exec app php artisan key:generate &&
docker-compose exec app npm install &&
docker-compose exec app npm run dev &&
docker-compose exec app npm install bootstrap &&
docker-compose exec app npm install bootstrap-icons &&
docker-compose exec app php artisan migrate --seed &&
docker-compose exec app php composer dump-autoload
