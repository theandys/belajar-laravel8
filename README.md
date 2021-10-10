# Learn Laravel 8

## Requirement

Here is minimum requirement to run this system:
- PHP 7.4
- MySQL

## Instalation for development

- ``composer install``
- ``cp .env.example .env``
	You should set db host, username, password, dll in .env before you run the migration
- ``php artisan migrate --seed``
- ``php artisan serve``