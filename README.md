
# CRUD Pasien Website

Website CRUD Pasien adalah sebuah aplikasi sederhana untuk melakukan operasi CRUD terhadap data pasien. Aplikasi ini dibangun dengan HTML, CSS, JavaScript, dan PHP.

## Fitur

1. **Tambah Pasien**: Tambahkan data pasien baru ke dalam database.
2. **Daftar Pasien**: Tampilkan daftar semua pasien yang ada dalam database.
3. **Lihat Pasien**: Lihat detail informasi seorang pasien.
4. **Edit Pasien**: Edit informasi seorang pasien.
5. **Hapus Pasien**: Hapus data pasien dari database.

## Instalasi

1. Pastikan Anda memiliki server lokal (misalnya XAMPP, WAMP, atau LAMP) yang mendukung PHP dan MySQL.
2. Clone repositori ini ke dalam direktori root server lokal Anda.

```bash
git clone https://github.com/nama_pengguna/crud-pasien.git
```

3. Buat database baru dengan nama `jwdpnc` di MySQL.
4. Impor file SQL yang disediakan (`jwdpnc.sql`) ke dalam database yang baru dibuat. Ini akan membuat tabel `pasien` yang diperlukan untuk aplikasi.

## Konfigurasi

1. Buka file `config.php` di dalam direktori `includes`.
2. Ubah nilai konstanta `DB_HOST`, `DB_USER`, `DB_PASS`, dan `DB_NAME` sesuai dengan pengaturan server MySQL lokal Anda.

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'jwdpnc');
```

## Penggunaan

1. Buka web browser dan akses aplikasi CRUD Pasien dengan mengunjungi `http://localhost/crud-pasien/`.
2. Anda akan diarahkan ke halaman utama, di mana Anda dapat melihat daftar pasien yang telah ditambahkan.
3. Untuk menambahkan pasien baru, klik tombol "Tambah Pasien" dan isi formulir yang diberikan.
4. Untuk melihat detail pasien, klik tombol "Lihat" pada baris data pasien yang diinginkan.
5. Untuk mengedit informasi pasien, klik tombol "Edit" pada baris data pasien yang diinginkan.
6. Untuk menghapus pasien, klik tombol "Hapus" pada baris data pasien yang diinginkan. Pastikan untuk mengonfirmasi tindakan ini sebelum penghapusan data.

## Kontribusi

Kontribusi selalu diterima dan dihargai. Jika Anda ingin berkontribusi pada proyek ini, silakan buat _pull request_ ke repositori ini.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---
