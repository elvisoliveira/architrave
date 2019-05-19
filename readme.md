# Architrave

## Installation

1. Clone this repo

2. Run Composer Install

3. Go to .env file and edit the following fields:

    DB_DATABASE=architrave
    DB_USERNAME=manon
    DB_PASSWORD=Manon1982

4. Create database with the name you added in the .env file

5. Open the command prompt and run the following commands:

    php artisan migrate
    
    php artisan db:seed --class=RoleSeeder
    
    php artisan db:seed --class=GroupSeeder

    php artisan db:seed --class=AssetSeeder

    php artisan db:seed --class=UserSeeder

6. Serve the application using the command php artisan serve

## Running the application

1. Go to the database and select 2 api_token values from the users table 
    (the first should be for a user with role_id = 1 and this should be admin token)
    (the second should be for a user with role_id = 2 and this should be normal token)

2. Visit the URL: http://localhost:8000/?api_token=FIRST_TOKEN in the previous step
    Then visit the same URL but the second token http://localhost:8000/?api_token=SECOND_TOKEN

Thanks