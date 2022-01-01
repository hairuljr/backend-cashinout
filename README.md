# Laravel 8 + Sanctum + Laravel UI

Backend API for Cash In Out App VUE 3

## What inside?

-   Laravel ^8.6 - [laravel.com/docs/8.x](https://laravel.com/docs/8.x)
-   Laravel UI ^3.x - [Laravel UI](https://github.com/laravel/ui)
-   Sanctum ^2.11 - [laravel-sanctum](https://laravel.com/docs/8.x/sanctum)

## What next?

After clone or download this repository, next step is install all dependency required by laravel and laravel-mix.

```shell
# create copy of .env
$ cp .env.example .env
# sett your .env (DB, etc)
# install composer-dependency
$ composer install
```

Before we start web server make sure we already generate app key, configure `.env` file and do migration.

```shell
# generate laravel app key
$ php artisan key:generate
# laravel migrate
$ php artisan migrate --seed
```
