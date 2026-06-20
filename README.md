# Coffee Shop Catalog (WhatsApp Order System)

Sebuah sistem pemesanan katalog toko (Coffee Shop) satu halaman (Single Page Application) yang sangat ringan, cepat, dan modern. Proyek ini dibangun menggunakan **PHP**, **Tailwind CSS**, dan **Vanilla JavaScript**. Terintegrasi langsung dengan WhatsApp untuk sistem pemesanan (*checkout*).

<p align="center">
  <img src="demo.png" alt="Demo Aplikasi" width="800"/>
</p>

## 🚀 Fitur Utama
- **Desain Modern & Responsif**: Menggunakan Tailwind CSS dengan efek visual elegan (Glassmorphism, animasi *scroll*, partikel).
- **Katalog Dinamis Tanpa Database**: Data produk dan kategori cukup disimpan di satu file `config.php` yang sangat mudah diatur oleh pemula.
- **Sistem Keranjang (Cart) Instan**: Pengguna dapat menambah, mengurangi, dan melihat total pesanan sebelum *checkout* langsung di halaman yang sama.
- **Checkout via WhatsApp**: Daftar pesanan dihitung otomatis dan dikirim ke nomor WhatsApp admin dalam format teks yang rapi.
- **Mendukung Promo Khusus**: Label visual otomatis untuk produk diskon 50% atau promo Buy 1 Get 1 (BOGO).

## 🛠️ Teknologi yang Digunakan
- **Backend**: PHP (Hanya untuk _config_ dan routing variabel data)
- **Frontend**: HTML5, CSS3, Vanilla JS
- **Styling**: Tailwind CSS (via CDN)
- **Ikon**: Lucide Icons (via CDN)

## 📦 Cara Instalasi & Penggunaan

1. **Download / Clone Repository**
   Unduh semua file ke dalam komputer atau server *hosting* Anda (misalnya cPanel).

2. **Jalankan Server Lokal (Untuk pengembangan)**
   Jika Anda sudah menginstal PHP di komputer, buka terminal di folder proyek dan jalankan:
   ```bash
   php -S localhost:5000
   ```
   Atau letakkan di dalam folder `htdocs` (jika menggunakan XAMPP) / `public_html` (jika di cPanel).

3. **Konfigurasi Nomor WhatsApp Admin**
   Buka file `config.php` menggunakan _text editor_. Ubah nilai variabel `$WHATSAPP_NUMBER`:
   ```php
   $WHATSAPP_NUMBER = "628xxxxxxxxxx"; // Gunakan format kode negara (62 untuk Indonesia)
   ```

4. **Menambah dan Mengubah Produk**
   Semua menu dan produk juga diatur di dalam `config.php` pada variabel `$MENU_SECTIONS`. Cukup ikuti instruksi yang sudah tertulis di dalam file tersebut.

## 📁 Struktur File
- `index.php` — Tulang punggung UI halaman utama dan pemuat konfigurasi.
- `config.php` — Pusat pengaturan (nomor WA admin dan daftar katalog).
- `style.css` — File *styling* tambahan yang dipisahkan untuk menjaga UI tetap bersih.
- `script.js` — Logika *frontend* (keranjang belanja, filter kategori, dan fungsi *checkout*).

## 📄 Lisensi
Proyek ini bersifat *Open Source* dan dapat digunakan serta dimodifikasi secara bebas.
