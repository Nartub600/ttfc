1. Clonar el repositorio

`git clone https://github.com/Nartub600/ttfc.git`

2. Configurar el entorno

```
cd ttfc
cp .env.example .env
php artisan key:generate
```

3. Configurar la base de datos (según corresponda)

```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

4. Instalar las dependencias con composer

`composer install` o `php composer.phar install`

5. Generar la base de datos

`php artisan migrate --seed`

6. Levantar el servidor de pruebas

`php artisan serve`
