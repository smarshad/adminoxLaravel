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


Create new project from existing template

Step 1: Create New Project Directory

    # You're already in ~/Downloads/laravel/projects/
    mkdir my-new-project
    cd my-new-project

Step 2: Copy Template Files (Without Git History)
    # Copy all files from adminoxLaravel except .git folder
    cp -r ../adminoxLaravel/* .
    cp -r ../adminoxLaravel/.* . 2>/dev/null || true

    # Remove the Git history from the copied project
    rm -rf .git

Step 3: Update Configuration for New Project
    # Update .env.docker with new project settings
    nano .env.docker

    Change these values in .env.docker:

    PROJECT_NAME=my-new-project
    NGINX_PORT=8081        # Different from adminoxLaravel (8080)
    MYSQL_PORT=3308        # Different from adminoxLaravel (3307)
    DB_DATABASE=my_new_project_db
    APP_NAME="My New Project"

    and in docker-compose.override.yml (two places)
     networks:
      - adminoxlaravel_network
    # Network connection
    networks:
      - adminoxlaravel_network

    Or use sed to automate:

    sed -i 's/PROJECT_NAME=adminoxlaravel/PROJECT_NAME=my-new-project/g' .env.docker
    sed -i 's/NGINX_PORT=8080/NGINX_PORT=8081/g' .env.docker
    sed -i 's/MYSQL_PORT=3307/MYSQL_PORT=3308/g' .env.docker
    sed -i 's/DB_DATABASE=quizjeeto/DB_DATABASE=my_new_project_db/g' .env.docker
    sed -i 's/APP_NAME=AdminOxLaravel/APP_NAME="My New Project"/g' .env.docker

Step 4: Create Fresh Laravel Application (optional)
    # Remove the old Laravel code
    rm -rf src/*

    # Create new Laravel project
    docker run --rm -v $(pwd)/src:/app composer create-project laravel/laravel .

Step 5: Initialize New Git Repository

    # Initialize new Git repo
    git init
    git add .
    git commit -m "Initial commit: New Laravel project with Docker"

    # Create new GitHub repository and push
    gh repo create my-new-project --public --push

Complete One-Command Solution:
Create a script to automate this process:
    # Create automation script
    nano ../create-project.sh

Content of create-project.sh:

    #!/bin/bash

    if [ -z "$1" ]; then
        echo "Usage: ./create-project.sh project-name [nginx-port] [mysql-port]"
        exit 1
    fi

    PROJECT_NAME=$1
    NGINX_PORT=${2:-8081}
    MYSQL_PORT=${3:-3308}
    TEMPLATE_DIR="../adminoxLaravel"

    echo "Creating new project: $PROJECT_NAME"
    echo "Nginx Port: $NGINX_PORT"
    echo "MySQL Port: $MYSQL_PORT"

    # Create project directory
    mkdir $PROJECT_NAME
    cd $PROJECT_NAME

    # Copy template files
    echo "Copying template files..."
    cp -r $TEMPLATE_DIR/* .
    cp -r $TEMPLATE_DIR/.* . 2>/dev/null || true

    # Remove Git history
    rm -rf .git

    # Update .env.docker
    echo "Updating configuration..."
    sed -i "s/PROJECT_NAME=adminoxlaravel/PROJECT_NAME=${PROJECT_NAME}/g" .env.docker
    sed -i "s/NGINX_PORT=8080/NGINX_PORT=${NGINX_PORT}/g" .env.docker
    sed -i "s/MYSQL_PORT=3307/MYSQL_PORT=${MYSQL_PORT}/g" .env.docker
    sed -i "s/DB_DATABASE=quizjeeto/DB_DATABASE=${PROJECT_NAME}_db/g" .env.docker
    sed -i "s/APP_NAME=AdminOxLaravel/APP_NAME=\"${PROJECT_NAME}\"/g" .env.docker

    # Create fresh Laravel app
    echo "Creating fresh Laravel application..."
    rm -rf src/*
    docker run --rm -v $(pwd)/src:/app composer create-project laravel/laravel .

    # Initialize Git
    echo "Initializing Git repository..."
    git init
    git add .
    git commit -m "Initial commit: ${PROJECT_NAME}"

    echo ""
    echo "✅ Project $PROJECT_NAME created successfully!"
    echo ""
    echo "Next steps:"
    echo "1. cd $PROJECT_NAME"
    echo "2. Create GitHub repo: gh repo create $PROJECT_NAME --public --push"
    echo "3. Start containers: docker compose --env-file .env.docker up -d"
    echo "4. Access your app: http://localhost:${NGINX_PORT}"

Make it executable and use it:
    chmod +x ../create-project.sh
    cd ~/Downloads/laravel/projects/
    ./create-project.sh my-new-project


Let's Do It Now:

    # You're in ~/Downloads/laravel/projects/
    mkdir client-project
    cd client-project
    cp -r ../adminoxLaravel/* .
    cp -r ../adminoxLaravel/.* . 2>/dev/null || true
    rm -rf .git

    # Update configuration
    sed -i 's/PROJECT_NAME=adminoxlaravel/PROJECT_NAME=client-project/g' .env.docker
    sed -i 's/NGINX_PORT=8080/NGINX_PORT=8081/g' .env.docker
    sed -i 's/MYSQL_PORT=3307/MYSQL_PORT=3308/g' .env.docker
    sed -i 's/DB_DATABASE=quizjeeto/DB_DATABASE=client_project_db/g' .env.docker
    sed -i 's/APP_NAME=AdminOxLaravel/APP_NAME="Client Project"/g' .env.docker

    # Fresh Laravel
    rm -rf src/*
    docker run --rm -v $(pwd)/src:/app composer create-project laravel/laravel .

    # Initialize Git
    git init
    git add .
    git commit -m "Initial commit: Client Project"

    # Create GitHub repo
    gh repo create client-project --public --push