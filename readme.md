# Kong Api Gateway

## How to run Kong
> docker compose up

### Kong Api Links

```
http://localhost:8000 (Serve as Api Gateway URL)
```
```
http://localhost:8001 (Serve as Admin Api)
```

## How to run Laravel Api
```console
cd laravel_api/laravel
```
```console
cp .env.example .env
```
```console
composer install
```
```console
php artisan key:generate
```

### Setup database credentials

```console
php artisan migrate
```
### Run Laravel Project
```console
php artisan serve
````