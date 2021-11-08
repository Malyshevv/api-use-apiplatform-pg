# API Platform (required reading)

https://api-platform.com/docs/distribution/

# Then, create the database and its schema:

- php bin/console doctrine:database:create 
- php bin/console doctrine:schema:create 

*OR 

- bin/console doctrine:database:create
- bin/console doctrine:schema:create


# And start the built-in PHP server:

- php -S 127.0.0.1:8000 -t public
- https://localhost:8000/api

# Make Entity
- php bin/console make:entity
- php bin/console doctrine:schema:update --force
