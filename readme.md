# twitter-search

Here is a simple twitter php api handling package. I will add more features from time to time.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

All you need is composer.

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=bin --filename=composer
php bin/composer
sudo mv composer.phar /usr/local/bin/composer
composer
```

### Installing

First things first, clone this repo

Afterwards install the dependencies with composer

```
composer install
```

Afterwards check out my index.php file in there to get a feel.

```
include "vendor/autoload.php";
use Twitter\Search\Search;

$search = new Search();
$search->setToken('API_KEY','API_SECRET');
$search->setValues('query', 'count(optional)');
$search->search();
```

## Authors

* **Vahan Terzibashian** - *Initial work* - [Vahan90](https://github.com/vahan90)


## License

This project is licensed under the GPL License - see the [LICENSE.md](LICENSE.md) file for details