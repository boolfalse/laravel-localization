
## Laravel Localization

Using custom middleware to intercept each request and validate URI prefix as a current app locale.


### Prerequisites:

- PHP
- Composer


### Quick Start:

- Clone the repo;
```shell
git clone git@github.com:boolfalse/laravel-localization.git && cd laravel-localization/
```

- Install dependencies;
```shell
composer install
```

- Create a new `.env` file;
```shell
cp .env.example .env
```

- Generate a new `APP_KEY`;
```shell
php artisan key:generate
```

- Refresh the cache;
```shell
php artisan optimize
```

- Run the server;
```shell
php artisan serve
```


### Resources:

- Attached Medium article: [A solid way to add multi-language support to your Laravel app](https://medium.com/@boolfalse/a-solid-way-to-add-multi-language-support-to-your-laravel-app-3c34d7e44600)


- [Installation: Your First Laravel Project](https://laravel.com/docs/10.x/installation#your-first-laravel-project)
- [Localization: Introduction](https://laravel.com/docs/10.x/localization#introduction)
- [Drop Down Menu (pure JavaScript)](https://codepen.io/dg1234uk/pen/wGyPRP)


### Author:

- [BoolFalse](https://boolfalse.com/)

