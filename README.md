# 2108191351
Test task: add and delete addresses. Created with Laravel Framework

# Getting started

## Installation


Clone the repository

    git clone https://github.com/Archibar/2108191351.git

Switch to the repo folder

    cd 2108191351

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run migrations

    php artisan migrate
    
Seeding cities to database

    php artisan geo:seed AE --append
