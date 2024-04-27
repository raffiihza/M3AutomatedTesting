# REQUIREMENT MODUL 3
Halo teman-teman, selamat datang di modul 3 dari praktikum Perancangan Perangkat Lunak EAD laboratory 2024, kali ini teman-teman akan melakukan automated testing pada aplikasi laravel yang sudah dibuat. Hal pertama yang perlu dilakukan ketika ingin menjalankan project ini, pastikan teman-teman memiliki requirement sebagai berikut :

- PHP >=8.0
- Composer
- Node.js (https://nodejs.org/en)
- mysql

jika sudah memenuhi kriteria diatas teman-teman bisa melakukan clone pada project ini dan menjalankannya. caranya sebagai berikut :

1. Lakukan clone proyek pada device kalian masing masing   

2. `$ composer install`

3. `$ npm install`

4. `$ npm run dev`

5. `$ cp .env.example .env`

6. Generate key dengan perintah `$ php artisan key:generate`

7. `$ composer require laravel/dusk:*`

8. `$ php artisan dusk:install`

9. `$ php artisan dusk:chrome-driver`

10. Migrate database dengan perintah 
`$ php artisan migrate`

11. Jalankan aplikasi dengan perintah 
`$ php artisan serve`

12. Sesuaikan variabel `APP_URL` di file `.env`

Selamat mengerjakan ya :)
