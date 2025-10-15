✅ Next Steps for Laravel Setup:

Start the containers:
image Build 

sudo docker compose --env-file .env.docker build --no-cache

sudo docker compose --env-file .env.docker up -d


Check running containers:

sudo docker ps


Install Laravel inside the app container:

docker exec -it laravel-app-qjadmin /bin/bash
cd /var/www/html
composer create-project --prefer-dist laravel/laravel .


Set permissions (for storage & bootstrap):

chown -R www-data:www-data storage bootstrap/cache
chmod -R 775 storage bootstrap/cache


Set up .env for Laravel:

cp .env.example .env
php artisan key:generate


Run migrations:

php artisan migrate


sudo docker compose down

docker exec -it laravel-mysql-qjadmin mysql -u root -p


# Rebuild everything fresh
docker-compose down -v
docker-compose up -d --build

# Enter app container
docker exec -it laravel-app-qjadmin bash

# Clear config and run migrations
php artisan config:clear
php artisan cache:clear
php artisan migrate


Let's verify the configuration is working:
1. Check the full configuration to see if variables are properly set:
    docker compose --env-file .env.docker config

2. Or check specific services to see if the variables are interpolated:

    # Check container names
    docker compose --env-file .env.docker config | grep "container_name"

    # Check network configuration
    docker compose --env-file .env.docker config | grep "network"

    # Check ports
    docker compose --env-file .env.docker config | grep "ports"

3. Now start your containers:
    docker compose --env-file .env.docker up -d

4. Check if containers are running:
    docker ps


