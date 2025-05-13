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

# triple-s
