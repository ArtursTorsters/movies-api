# Movie and Broadcast API

This project is a simple API for managing movies and their broadcasts using Laravel. It allows users to create, delete, and list movies and their broadcasts. The API is connected to a MySQL database and includes the following functionalities:

- **Create a Movie**: Add a new movie to the database.
- **Delete a Movie**: Remove a movie from the database by its ID.
- **List Movies**: Retrieve a paginated list of movies, optionally filtered by title.
- **Add a Broadcast**: Schedule a broadcast for a movie.
- **List Broadcasts**: Get the broadcast schedule for a specific movie.

Additionally - included a Postman collection with predefined API requests.

## Requirements

To run this project, you will need the following:

- Docker
- Docker Compose

## Installation
   git clone https://github.com/ArtursTorsters/movies-api.git
   cd movies-api

## env file
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=movies_db
DB_USERNAME=root
DB_PASSWORD=


## build and start the containers
    docker-compose up --build

## run the database migrations
    docker-compose exec app php artisan migrate


