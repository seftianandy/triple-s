## Instalasi Aplikasi Triple-s

Berikut langkah instalasi untuk aplikasi project triple-s skoring seni silat :

- Pastikan redis sudah terinstall pada komputer kalian. Jika belum maka silahkan install redis dahulu. Ini digunakan untuk support realtime data yang akan digunakan nantinya. Untuk mengecek apakah redis sudah terinstall silahkan jalankan perintah ```redis-cli ping``` dan jika sudah terinstall maka akan muncul balasan ```PONG```
- Untuk menjalankan aplikasi sangat dianjurkan menggunakan ```Laragon``` atau ```Herd``` karena dengan aplikasi ini kita bisa mengakses aplikasi menggunakan virtual domain ```.test``` dan ini sudah terdaftar pada file ```socket-server.js```
- Bila tidak menggunakan ```Laragon``` atau ```Herd``` kalian bisa mengedit file ``socket-server.js``` sesuai dengan kebutuhan kalian
- Copy file ```.env.example``` ke file bernama ```.env```
- Seting database pada file ```.env```
- Untuk database gunakan setingan seperti berikut :

```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=triple-s
DB_USERNAME=postgres
DB_PASSWORD=(masukkan password database kamu)
```

- Jalankan perintah ```composer update```
- Jalankan perintah ```php artisan key:generate```
- Jalankan perintah ```npm install``` dimana ini dibutuhkan untuk menginstall socket.io (digunakan untuk aksi realtime pada aplikasi)
- Jalankan perintah ```php artisan migrate```
- Jalankan perintah ```php artisan db:seed```
- Untuk akun administrator = email : ```admin@seni.com``` dan password : ```password```

Untuk tahap penginstalan aplikasi sudah selesai. Sekarang untuk tahap menjalankan aplikasi bila kalian tidak menggunakan aplikasi laragon atau herd maka dibutuhkan 2 perintah yang nantinya dijalankan bersamaan. Yaitu perintah menjalankan aplikasi laravelnya sendiri dan menjalankan socket.io nya.
Untuk perintahnya sebagai berikut :

- Jalankan perintah ```php artisan serve``` untuk menjalankan aplikasi laravelnya.
- Buka tab baru atau terminal baru dan jalankan perintah ```npm start```

Jika sudah menggunakan ```Laragon``` atau ```Herd``` maka tinggal menjalankan perintah berikut :

- Buka tab baru atau terminal baru dan jalankan perintah ```npm start```


## Instalasi Aplikasi Triple-s Menggunakan Docker Sail

Sekarang aplikasi triple-s sudah bisa berjalan pada docker menggunakan sail. Ini akan lebih memudahkan untuk membangun program karena menggunakan 1 sepesifikasi sistem yang bisa berjalan pada semua OS. Berikut cara penginstalannya :

- Pastikan aplikasi docker sudah terinstall pada device dan sudah berjalan.
- Jalankan perintah berikut pada terminal dengan kondisi path terminal pada root aplikasi ```composer update```.
- Buat file .env seperti pada langkah diatas. Tambahkan konfigurasi seperti berikut pada file .env nya :

```env
APP_PORT=8000
FORWARD_DB_PORT=2025
FORWARD_REDIS_PORT=2026
VITE_PORT=5173
```

- Pastikan pada bagian database, setingannya seperti berikut :

```env
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=triple-s
DB_USERNAME=postgres
DB_PASSWORD=password
```

- Tambahkan script berikut pada .env untuk menggunakan zona waktu jakarta : ```APP_TIMEZONE=Asia/Jakarta```
- Cari script berikut pada .env :

```env
SESSION_DRIVER=database
QUEUE_CONNECTION=database
CACHE_STORE=database
```

- Setelah ketemu, rubah menjadi seperti berikut :

```env
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
CACHE_STORE=redis
```

- Setelah itu jalankan perintah berikut : ```./vendor/bin/sail up -d```. Dengan tambahan -d berarti prosesnya akan berjalan pada background.
- Atau jika ingin melihat prosesnya untuk memastikan setingan sudah berjalan dengan benar, gunakan perintah berikut : ```./vendor/bin/sail up```.
- Bila sudah selesai jalankan generate key dengan perintah berikut : ```./vendor/bin/sail artisan key:generate```.
- Dan migrate databasenye : ```./vendor/bin/sail artisan migrate```.
- Jalankan seedernya juga dengan perintah berikut : ```./vendor/bin/sail artisan db:seed```.
- Untuk menjalankan aplikasi pada lingkungan developer gunakan perintah berikut : ```./vendor/bin/sail npm install```.
- Setelah selesai, jalankan perintah berikut : ```./vendor/bin/sail npm run dev```. Ini akan menjalankan vite pada aplikasi ini yang berfungsi untuk menampilkan efek tailwind css yang digunakan.
- Jalankan juga perintah berikut : ```./vendor/bin/sail npm start```. Ini akan menjalankan socket.io yang digunakan untuk realtime proses penilaian pada aplikasi.

# triple-s
