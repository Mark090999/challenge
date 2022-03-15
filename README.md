# challenge


# For Docker

1. docker-compose build

2. docker-compose up -d

3. docker-compose exec php composer install --ignore-platform-reqs

4. docker-compose exec php cp .env.example .env

5. docker-compose exec php php artisan key:generate

6. docker-compose exec php php artisan migrate

7. docker-compose exec php php artisan db:seed

8. Navigate to http://localhost:8000/api/customers

9. Navigate to http://localhost:8000/api/banks
