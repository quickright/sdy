### artisan
```
php artisan migrate:rollback --path=/apps/weixin/sdy/database/migrations/
php artisan make:migration create_table_doctor --create tb_doctor
php artisan migrate:make create_doctor_table --table=tb_doctor --create
php artisan make:model hd/Country --migration
php artisan make:controller DoctorController
php artisan make:model hd/Doctor
php artisan serve
php laravel new sdy
php artisan  migrate:refresh --force
php artisan  migrate --verbose
php artisan help cmd

php artisan make:migration:schema create_dogs_table --schema="name:string"
composer update

```

### mysql
```
mysql -uazkaban -p db_hd < /apps/weixin/sdy/resources/tb_district.txt


```

### debug
```
 var_dump()
 print_r()
 xdebug
```