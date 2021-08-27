1. git clone git@github.com:GluhhovaA/onboardingApi.git
2. docker-compose up
3. docker-compose exec php-fpm cp .env.example .env
4. docker-compose exec php-fpm composer install
5. docker-compose exec php-fpm php artisan key:generate
6. docker-compose exec php-fpm php artisan migrate --seed
# onboardingApi
