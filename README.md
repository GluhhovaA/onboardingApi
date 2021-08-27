0. docker install if you haven't or skip it  https://docs.docker.com/get-docker/    
1. git clone https://github.com/GluhhovaA/onboardingApi.git 
2. docker-compose up
3. docker-compose exec php-fpm cp .env.example .env
4. docker-compose exec php-fpm composer install
5. docker-compose exec php-fpm php artisan key:generate
6. docker-compose exec php-fpm php artisan voyager:install --with-dummy
7. docker-compose exec php-fpm php artisan db:seed

Voyager
email: admin@admin.com
password: password

[comment]: <> (6. docker-compose exec php-fpm php artisan migrate --seed)
# onboardingApi
