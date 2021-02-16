# PHP Kata Scaffolding

This is a scaffolding for Katas in PHP. 

## Setup

```bash
git clone https://github.com/Chemaclass/php-kata
cd php-kata
docker-compose up -d
docker-compose exec php-kata composer install
docker-compose exec -u dev php-kata composer test-all
```

#### You can also go directly into the bash shell 

```bash
docker exec -ti -u dev php-kata bash
```

### Some composer scripts

```bash
composer test-all     # run test-quality & test-unit
composer test-quality # run csrun & psalm
composer test-unit    # run phpunit

composer csrun  # check code style
composer psalm  # run Psalm coverage
```

#### Extra

```bash
vendor/bin/psalm --clear-cache # clear the psalm cache ;)
```
