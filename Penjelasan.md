** Tata Cara menginstall Laravel **

Pastikan mempunyai composer yang terinstall.

Jalankan code di terminal & dan jalankan composer di dalam folder laravelnya:
 -- composer install
 
 -- lalu copy .env example && jadikan format .env
 
 ![image](https://user-images.githubusercontent.com/44864015/123531772-846c6e00-d731-11eb-8aad-c1a365efe689.png)
 
 -- lalu ketikan kode berikut: ' php artisan key:generate '
 
 --setelah sudah, masuk ke dalam .env . Buat databasenya di mysql/postgre .
 
 -- lalu jalankan diterminal dalam folder laravel dan ketikan 'php artisan migrate'
 
 -- lalu jalankan, 
    untuk laravel sendiri tidak harus didalam folder htdocs. yang terpenting adalah dimana composer itu berada.
