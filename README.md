# Test Laravel-blog

Инструкция по установке (подразумевается, что установлен docker, docker-compose и 80-й порт свободен)

Основа взята <a href=https://www.digitalocean.com/community/tutorials/how-to-install-and-set-up-laravel-with-docker-compose-on-ubuntu-20-04-ru>здесь</a>
###для Linux:
git clone https://github.com/tarasovc47/laravel-blog laravel &&
cd laravel &&
docker-compose build app &&
docker-compose up -d &&
docker-compose exec app composer install &&
docker-compose exec app php artisan key:generate &&
docker-compose exec app npm install &&
docker-compose exec app npm run dev &&
docker-compose exec app npm install bootstrap &&
docker-compose exec app npm install bootstrap-icons


открыть просто localhost

### для windows:
скачать и распаковать zip в папку
запустить powershell в контексте папки и выполнить последовательно:
docker-compose build app
docker-compose up -d
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app npm install
docker-compose exec app npm run dev
docker-compose exec app npm install bootstrap
docker-compose exec app npm install bootstrap-icons
