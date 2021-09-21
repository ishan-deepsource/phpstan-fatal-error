## Proper result

```sh
git clone git@github.com:ishan-deepsource/phpstan-fatal-error.git
cd ishan-deepsource/phpstan-fatal-error
php phpstan.phar analyse -c phpstan.neon --memory-limit=1536M
```

## Fatal error

```sh
git clone git@github.com:ishan-deepsource/phpstan-fatal-error.git
cd ishan-deepsource/phpstan-fatal-error
composer install
php phpstan.phar analyse -c phpstan.neon --memory-limit=1536M
```