## Description
PHP project using [Travis](https://travis-ci.org/) continous integration with a
[Postgres](https://www.postgresql.org/) database. Test coverage is ran with PHPUnit.

## Installation

Clone the repository:

```
aurelien@linux:~$ git clone git@github.com:aurelienlair/travis-php.git 
``` 

## How to test/debug locally

First of all you need to install [Docker](https://docs.docker.com/install/linux/docker-ce/ubuntu/) by running:

Then you need to download the PHP container and mount the volume of this project within it.

```
aurelien@linux:~$ PROJECTS_PATH=/home/aurelien/projects
aurelien@linux:~$ /snap/bin/docker run --name travis-php-debug -dit -v $PROJECTS_PATH/travis-php:/var/www travisci/ci-garnet:packer-1512502276-986baf0 /sbin/init
```

Then log within the container with a bash session
```
# Exec the bash login (-l) to the existing container called "travis-php-debug"
aurelien@linux:~$ /snap/bin/docker exec -it travis-php-debug bash -l
```

And run these operations necessary for the correct set-up:
```
aurelien@linux:~$ su - travis
aurelien@linux:~$ cd /var/www
aurelien@linux:~$ sudo service postgresql start
aurelien@linux:~$ phpenv global 7.1 2>/dev/null
aurelien@linux:~$ phpenv global 7.1
aurelien@linux:~$ composer self-update
aurelien@linux:~$ createdb testdb -U postgres
aurelien@linux:~$ psql -f db/schema.sql --username=postgres testdb
aurelien@linux:~$ psql -c '\connect testdb' -f db/fixtures.sql --u
aurelien@linux:~$ phpunit --configuration phpunit.xml --coverage-text
```

If tests are green then you can commit and push!

## Requires
Access to [Travis](https://travis-ci.org/)
