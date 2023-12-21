# [ ToekangKu Backend - Laravel ]


# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation)

Clone the repository

    git clone https://github.com/TOEKANGKU/backend.git

Switch to the repo folder

    cd backend

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

Start the laravel queue **(Run in another terminal/cmd)**

    php artisan queue:work

Start the laravel schedule **(Run in another terminal/cmd)**

    php artisan schedule:work

You can now access the application at http://localhost:8000

You can now access the application monitoring at http://localhost:8000/telescope


## Database seeding

Run the database seeder and you're done

    php artisan db:seed

***Note*** : It's recommended to have a clean database before seeding. You can refresh your migrations at any point to clean the database by running the following command

    php artisan migrate:refresh
    

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------