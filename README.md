Using the API Platform Distribution (Recommended)
Start by downloading the API Platform distribution, or generate a GitHub repository from the template we provide. You will add your own code and configuration inside this skeleton.

Note: Avoid downloading the .zip archive, as it may cause potential permission issues, prefer the .tar.gz archive.

API Platform is shipped with a Docker definition that makes it easy to get a containerized development environment up and running. If you do not already have Docker on your computer, it's the right time to install it.

Note: On Mac, only Docker for Mac is supported. Similarly, on Windows, only Docker for Windows is supported. Docker Machine is not supported out of the box.

Open a terminal, and navigate to the directory containing your project skeleton. Run the following command to start all services using Docker Compose:

Download and build the latest versions of the images:

docker-compose build --pull --no-cache
Start Docker Compose in detached mode:

docker-compose up -d 
Tip: be sure that the ports 80, 443 and 5432 of the host are not already in use. The usual offenders are Apache, NGINX and Postgres. If they are running, stop them and run docker-compose up -d again.


Then, create the database and its schema:

bin/console doctrine:database:create
bin/console doctrine:schema:create

And start the built-in PHP server:

php -S 127.0.0.1:8000 -t public
