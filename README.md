# Laravel-mini-project


Clone project

- create storage directory and storage/app, storage/cache, storage/framework & storage/logs directories
- chmod -R 777 storage
- chmod -R 777 bootstrap/cache
- php /usr/bin/composer install or php72 /usr/bin/composer update
- php artisan storage:
- update .env
- php artisan --version
- php artisan cache:clear
- php artisan route:clear
- php artisan route:list
- copy-paste .htaccess & .htpasswd (if it's necessary)
- php artisan migrate:refresh --seed

How to install

- cd /data/www/{username}
- php /usr/bin/composer global require "laravel/installer" (if Laravel isn’t installed)
- php /usr/bin/composer create-project --prefer-dist laravel/laravel {project_name}  (. install in cur. folder) 
- cd /data/www/{username}/{project_name}
- php /usr/bin/composer install
- php artisan storage:

- chmod -R 777 storage
- chmod -R 777 bootstrap/cache

- php artisan --version
- php artisan cache:clear
- php artisan route:clear
- php72 artisan route:list

Install phpMyAdmin in public/ directory
