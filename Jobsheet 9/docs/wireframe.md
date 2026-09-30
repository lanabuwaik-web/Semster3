# Wireframe & User Flow — Sistem Informasi Data Kost

Sub-CPMK: Merancang UI/UX aplikasi (proyek).

Halaman yang sudah ada (Beranda, Daftar/Tambah Kamar, Daftar/Tambah Penghuni — Jobsheet 1-3) belum mencakup fitur Login, Dashboard Petugas, dan pengelolaan data kost. Dokumen ini merancang wireframe untuk halaman-halaman tersebut sebelum diimplementasikan mulai Jobsheet 5 dan seterusnya.

## Aktor

- **Tamu**: hanya bisa melihat informasi kamar dan penghuni secara terbatas melalui Beranda dan Daftar Kamar tanpa login.
- **Petugas**: login untuk mengakses seluruh fitur CRUD dan pengelolaan data kost.

## User Flow — Pengelolaan Kamar

```text
[Petugas Login] -> [Dashboard] -> [Pilih menu "Tambah Kamar"]
        -> [Isi Nomor Kamar, Harga, Status]
        -> [Simpan] -> [Data Kamar Tersimpan]
        -> [Kembali ke Daftar Kamar]
[Dashboard] -> [Menu "Tambah Penghuni"] -> [Isi Data Penghuni]
        -> [Isi Nomor Kamar] -> [Simpan]
        -> [Data Penghuni Tersimpan] -> [Kembali ke Dashboard]

Wireframe: Halaman Login
+--------------------------------------+
|       Sistem Informasi Data Kost     |
|--------------------------------------|
|                                      |
|          [ Login Petugas ]           |
|                                      |
|   Username : [______________]        |
|   Password : [______________]        |
|                                      |
|          [    Masuk    ]             |
|                                      |
+--------------------------------------+

Wireframe: Dashboard Petugas
+-----------------------------------------------------+
| Sistem Informasi Data Kost                          |
| Beranda | Kamar | Penghuni                          |
|-----------------------------------------------------|
|                                                     |
|  [Total Kamar]   [Kamar Tersedia]   [Total Penghuni]|
|                                                     |
|  Aksi Cepat:                                        |
|  [ + Tambah Kamar ]   [ + Tambah Penghuni ]         |
|                                                     |
|  Data Terbaru                                       |
|  -------------------------------------------------  |
|  Nomor Kamar | Harga | Status                       |
+-----------------------------------------------------+

Wireframe: Form Tambah Kamar
+--------------------------------------+
|          Form Tambah Kamar           |
|--------------------------------------|
|                                      |
|  Nomor Kamar : [______________]      |
|  Harga       : [______________]      |
|  Status      : [ Tersedia      v ]   |
|                                      |
|          [      Simpan      ]        |
+--------------------------------------+

Wireframe: Form Tambah Penghuni
+--------------------------------------+
|        Form Tambah Penghuni          |
|--------------------------------------|
|                                      |
|  Nama        : [______________]      |
|  Nomor Kamar : [______________]      |
|  No. HP      : [______________]      |
|                                      |
|          [      Simpan      ]        |
+--------------------------------------+

Wireframe: Daftar Kamar
+-----------------------------------------------------+
|                  Daftar Kamar                       |
|-----------------------------------------------------|
| Cari Nomor Kamar: [________________] [Cari]         |
|                                                     |
| Nomor Kamar | Harga       | Status    | Aksi         |
|-----------------------------------------------------|
| A01         | Rp 500.000  | Tersedia  | Edit | Hapus |
| A02         | Rp 500.000  | Terisi    | Edit | Hapus |
+-----------------------------------------------------+

Wireframe: Daftar Penghuni
+-----------------------------------------------------+
|                Daftar Penghuni                      |
|-----------------------------------------------------|
| Cari Nama: [________________] [Cari]                |
|                                                     |
| Nama | Nomor Kamar | No. HP | Aksi                  |
|-----------------------------------------------------|
| Ahwa | A01         | 08xxxx | Edit | Hapus          |
+-----------------------------------------------------+

Konsistensi dengan Desain yang Sudah Berjalan
Warna aksen, tipografi navbar, dan gaya tabel/kartu mengikuti assets/css/style.css yang sudah dibangun sejak Jobsheet 2-3.
Navbar akan ditambah menu Peminjaman dan indikator status login (nama petugas / tombol Logout) mulai implementasi di Jobsheet 10.
Edge case yang perlu ditangani saat implementasi: buku stok habis tidak boleh dipilih di form peminjaman; anggota dengan tunggakan terlambat divalidasi di Jobsheet 12 (tugas mandiri).