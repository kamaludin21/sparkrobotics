<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://sparkrobotics.id/images/spark.png" width="400" alt="Laravel Logo"></a></p>


## Spark Robotics

Full stack website with functional admin and dynamic content manage for https://sparkrobotics.id


### Aktifkan mode maintenance (agar user melihat halaman "sedang perbaikan")
php artisan down

### 1. Tarik kode terbaru dari Git
git pull origin main

### 2. Update paket PHP (tanpa dev & optimize autoloader)
composer install --optimize-autoloader --no-dev

### 3. Build aset frontend dengan Bun
bun install
bun run build

### 4. Hapus node_modules untuk menghemat storage
rm -rf node_modules

### 5. Bersihkan dan buat ulang cache Laravel dan FilamentPHP
php artisan optimize:clear
php artisan optimize
php artisan filament:optimize-clear
php artisan filament:optimize

### 7. Restart queue worker agar memuat kode terbaru
php artisan queue:restart

### 8. Generate Sitemap
php artisan app:generate-sitemap

### Matikan mode maintenance (web kembali online)
php artisan up

echo "Deployment Selesai!"
