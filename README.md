# API Platform (required reading)

https://api-platform.com/docs/distribution/

# Then, create the database and its schema:

- php bin/console doctrine:database:create 
- php bin/console doctrine:schema:create 

*OR 

- bin/console doctrine:database:create
- bin/console doctrine:schema:create


# And start the built-in PHP server:

- php bin/console server:run

* if You have trouble on this step (command not found)
* - composer require symfony/web-server-bundle 4.4
* - php bin/console cache:clear

- https://localhost:8000/api

# Make Entity ...
- php bin/console make:entity
- php bin/console doctrine:schema:update --force



# API Platform Admin (required reading)

- https://api-platform.com/docs/admin/getting-started/

# API Platform Start

- cd YOR_FLOODER_PROJECT/myadmin
- npm start
- https://localhost:3000/

# API Platform (required tools)

- https://nodejs.org/en/
