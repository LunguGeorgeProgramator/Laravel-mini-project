# Laravel-mini-project


1. Clone project
create storage directory and storage/app, storage/cache, storage/framework & storage/logs directories
chmod -R 777 storage
chmod -R 777 bootstrap/cache
php72 /usr/bin/composer install or php72 /usr/bin/composer update
php72 artisan storage:
update .env
php72 artisan --version
php72 artisan cache:clear
php72 artisan route:clear
php72 artisan route:list
copy-paste .htaccess & .htpasswd (if it's necessary)
php72 artisan migrate:refresh --seed

2. How to install
cd /data/www/{username}
php72 /usr/bin/composer global require "laravel/installer" (if Laravel isn’t installed)
php72 /usr/bin/composer create-project --prefer-dist laravel/laravel {project_name}  (. install in cur. folder) 
cd /data/www/{username}/{project_name}
php72 /usr/bin/composer install
php72 artisan storage:

chmod -R 777 storage
chmod -R 777 bootstrap/cache

php72 artisan --version
php72 artisan cache:clear
php72 artisan route:clear
php72 artisan route:list

Install phpMyAdmin in public/ directory
