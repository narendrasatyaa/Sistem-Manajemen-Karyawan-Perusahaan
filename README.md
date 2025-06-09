# 🗂️ Deskripsi Proyek: Sistem Manajemen Karyawan
📌 Ringkasan
Sistem ini merupakan aplikasi web sederhana yang dibuat untuk mengelola data karyawan, divisi, dan presensi dalam suatu perusahaan. Proyek ini dilengkapi dengan fitur CRUD (Create, Read, Update, Delete) serta autentikasi login, sehingga hanya pengguna terverifikasi yang dapat mengakses sistem.

#⚙️ Fitur Utama
🔐 Login
Sistem login berbasis session ($_SESSION) untuk membatasi akses ke halaman admin.

👨‍💼 Manajemen Karyawan
Menampilkan, menambah, mengedit, dan menghapus data karyawan.
Setiap karyawan terhubung dengan satu divisi dan memiliki riwayat presensi.

🏢 Manajemen Divisi
Menyimpan data divisi di perusahaan dan dapat dikaitkan ke banyak karyawan.

🕒 Manajemen Presensi
Mencatat kehadiran setiap karyawan berdasarkan tanggal.
Data kehadiran dapat diperbarui atau dihapus jika ada kesalahan pencatatan.

# 🧰 Stack Teknologi
Frontend: HTML, CSS (opsional: Bootstrap untuk tampilan responsive)

Backend: PHP Native

Database: MySQL

Keamanan: Session login menggunakan $_SESSION

# 🗃️ Relasi Database
Tabel: karyawan

id_karyawan (PK)

nama

email

id_divisi (FK)

Tabel: divisi

id_divisi (PK)

nama_divisi

Tabel: presensi

id_presensi (PK)

id_karyawan (FK)

tanggal

status (Hadir / Izin / Sakit / Alpha)

# 🎯 Tujuan Proyek
Melatih penggunaan PHP dan MySQL dalam pengembangan web berbasis data.

Menerapkan konsep relasi antar tabel menggunakan foreign key.

Membangun sistem sederhana yang modular dan mudah dikembangkan untuk skala yang lebih besar.

# 📁 Struktur Folder
```
/karyaHub/
│
├── config/
│   └── koneksi.php
│
├── login/
│   ├── login.php
│   └── logout.php
│
├── dashboard/
│   ├── index.php
│   ├── karyawan/
│   │   ├── tambah.php
│   │   ├── edit.php
│   │   └── hapus.php
│   ├── divisi/
│   │   ├── tambah.php
│   │   ├── edit.php
│   │   └── hapus.php
│   └── presensi/
│       ├── tambah.php
│       ├── edit.php
│       └── hapus.php
│
├── assets/
│   ├── css/
│   └── js/
│
├── index.php
└── README.md
```
