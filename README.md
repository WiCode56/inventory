# inventory
 
## Instalasi
#### Via Git
```bash
https://github.com/WiCode56/inventory.git
```
### Setup Aplikasi
Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=inventory
DB_USERNAME=root
DB_PASSWORD=
```

Opsional
```bash
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:3jUR+MGVvRN9NheCHmB4oKAAte5hNdCvcwI5Ti9F5kU=
APP_DEBUG=true
APP_URL=http://localhost
```

Generate key
```bash
php artisan key:generate
```
Migrate database
```bash
php artisan migrate
```
Seeder table User, Kategori
```bash
php artisan db:seed
```
Menjalankan aplikasi
```bash
php artisan serve
```

## License

[MIT license](https://opensource.org/licenses/MIT)
