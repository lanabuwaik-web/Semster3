Wireframe & User Flow — Sistem Informasi Data Kost

Sub-CPMK: Merancang UI/UX aplikasi (proyek).

Halaman yang sudah ada (Beranda, Daftar/Tambah Kamar, Daftar/Tambah Penghuni — Jobsheet 1-3) belum mencakup fitur Login dan Dashboard Petugas. Dokumen ini merancang wireframe untuk halaman-halaman tersebut sebelum diimplementasikan mulai Jobsheet 5 dan seterusnya.

Aktor
Tamu: hanya bisa melihat katalog kamar (Beranda, Daftar Kamar) tanpa login.
Petugas: login untuk mengakses seluruh fitur CRUD data kamar dan penghuni.
User Flow — Pengelolaan Kamar
[Petugas Login] -> [Dashboard] -> [Pilih menu "Tambah Kamar"]
        -> [Isi Data Kamar] -> [Simpan]
        -> [Data Kamar Tersimpan] -> [Kembali ke Dashboard]
User Flow — Pengelolaan Penghuni
[Dashboard] -> [Menu "Tambah Penghuni"] -> [Isi Data Penghuni]
        -> [Pilih Nomor Kamar] -> [Simpan]
        -> [Data Penghuni Tersimpan] -> [Kembali ke Dashboard]
Wireframe: Halaman Login
+--------------------------------------+
|       Sistem Informasi Data Kost     |
|--------------------------------------|
|                                      |
|        [ Login Petugas ]             |
|                                      |
|   Username : [______________]        |
|   Password : [______________]        |
|                                      |
|          [   Masuk   ]               |
|                                      |
|   Belum punya akun? Daftar di sini   |
+--------------------------------------+

Wireframe: Dashboard Petugas
+-----------------------------------------------------+
| Sistem Informasi Data Kost  Beranda | Kamar | Penghuni | (Nama Petugas) Logout |
|-----------------------------------------------------|
|  [Total Kamar]   [Total Penghuni]   [Kamar Terisi]  |
|                                                     |
|  Aksi Cepat:                                        |
|  [ + Tambah Kamar ]   [ + Tambah Penghuni ]        |
|                                                     |
|  Data Terbaru                                       |
|  -------------------------------------------------- |
|  Nomor Kamar | Penghuni | Harga | Status            |
+-----------------------------------------------------+

Wireframe: Form Tambah Kamar
+--------------------------------------+
|  Form Tambah Kamar                   |
|--------------------------------------|
|  Nomor Kamar : [________________]    |
|  Harga        : [________________]    |
|  Status       : [ dropdown status ]  |
|                                      |
|          [  Simpan Kamar  ]           |
+--------------------------------------+

Wireframe: Form Tambah Penghuni
+--------------------------------------+
|  Tambah Penghuni                     |
|--------------------------------------|
|  Nama        : [________________]    |
|  Nomor Kamar : [ pilih kamar ______] |
|  No. HP      : [________________]    |
|                                      |
|          [  Simpan Penghuni  ]       |
+--------------------------------------+

Wireframe: Data Penghuni
+--------------------------------------+
|  Daftar Penghuni                     |
|--------------------------------------|
|  Cari penghuni:                      |
|  [ nama penghuni _________________ ] |
|                                      |
|  Nama | No. Kamar | No. HP | Aksi   |
|--------------------------------------|
|  Ahwa | A-01       | 08xxx  | Edit   |
|  Lana | A-02       | 08xxx  | Edit   |
+--------------------------------------+


Konsistensi dengan Desain yang Sudah Berjalan
Warna aksen, tipografi navbar, dan gaya tabel/kartu mengikuti assets/css/style.css yang sudah dibangun sejak Jobsheet 2-3.
Navbar akan menggunakan menu Kamar dan Penghuni, serta indikator status login (nama petugas / tombol Logout).
Tamu hanya dapat melihat Beranda dan Daftar Kamar.
Petugas harus login untuk mengakses fitur tambah, edit, dan hapus data.
Data kamar memiliki status Tersedia atau Terisi.
Penghuni dapat dikaitkan dengan nomor kamar yang tersedia.