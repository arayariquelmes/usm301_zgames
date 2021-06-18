### Comandos de uso comun

## Para desplegar con docker
``
    docker-compose build
    docker-compose up -d
``
## Para desplegar con xampp importante que se respete la estructura y se guarde
## todo en htdocs

## Para crear un proyecto de cero:
``
  composer create-project laravel/laravel  nombreApp
``

## Para instalar (recien se descarga de github, cuando el proyecto ya existe):
``
    composer install
``

### Para Laravel:

## Para crear controladores (dentro del contenedor):

``
    php artisan make:controller NombreController
``
## En los controladores metemos la logica de la aplicacion (el acceso a base de datos, etc)

### Base de datos

## para actualizar la base de datos

``
    php artisan migrate
``

## Para crear una migracion de una tabla
``
    php artisan make:migration nombre_da_lo_mismo --create=nombre_tabla_siempre_en_plural
``

## Para crear un modelo (un modelo es un archivo que permite efectuar operaciones
## con la base de datos)
``
    php artisan make:model Nombre
``
## Importante siempre el nombre en SINGULAR