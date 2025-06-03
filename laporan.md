# Sistem Informasi Nilai

Pada tujuan pembuatan web ini yaitu untuk mengembangkan aplikasi web dinamis yang dapat digunakan untuk mengelola data nilai di Universitas Rajin Pangkal Pandai (URP). Aplikasi ini akan dibangun menggunakan HTML, CSS, PHP, dan MySQL.

## 🚀 Fitur Utama

1.  **Autentikasi Pengguna**:
    * Pengguna dapat login menggunakan username dan password.
    * Terdapat tiga jenis pengguna: Dosen, Mahasiswa, dan Admin.
    * Setiap pengguna memiliki hak akses yang berbeda.
2.  **Dashboard Setiap Pengguna**:
    * Menampilkan informasi ringkas tentang pengguna yang sedang login.
    * Menampilkan menu navigasi sesuai dengan hak akses pengguna.
3.  **Untuk Dosen**:
    * **Pengelolaan Jenis Nilai**:
        * Membuat berbagai jenis nilai (UAS, UTS, Tugas, Quiz) di setiap mata kuliah.
    * **Pengelolaan Nilai Mahasiswa Secara Online**:
        * Memasukkan berbagai nilai untuk setiap mahasiswa per mata kuliah.
        * Mengubah atau menghapus nilai-nilai yang sudah dimasukkan/disimpan.
4.  **Untuk Mahasiswa**:
    * **Lihat Nilai**:
        * Melihat detail nilai dan nilai akhir untuk setiap mata kuliah yang dipilih.
        * Melihat informasi pada UMS pekan.
5.  **Untuk Admin**:
    * **Pengelolaan Pengguna**:
        * Menambahkan, mengubah, dan menghapus pengguna (dosen dan mahasiswa).
    * **Pengelolaan Mata Kuliah**:
        * Menambahkan, mengubah, dan menghapus mata kuliah.
    * **Pengelolaan Kelas**:
        * Mengatur mahasiswa yang terdaftar.
        * Mengatur dosen pengampu.
6.  **Struktur Database**:
    * `users` - menyimpan data pengguna (dosen dan mahasiswa).
    * `mata_kuliah` - menyimpan informasi mata kuliah.
    * `semester` - menyimpan informasi semester.
    * `kelas` - menyimpan informasi kelas.
    * `mahasiswa` - menyimpan data mahasiswa.
    * `dosen` - menyimpan data dosen.
    * `kelas_mahasiswa` - menyimpan relasi antara mahasiswa dan kelas.
    * `kelas_dosen` - menyimpan relasi antara dosen dan kelas. Satu kelas bisa memiliki lebih dari satu dosen.
    * `jenis_nilai` - menyimpan jenis-jenis nilai (misalnya: UAS, UTS, tugas, quiz).
    * `kelas_jenis_nilai_bobot` - menghubungkan kelas dengan jenis penilaian beserta bobot spesifiknya.
    * `nilai` - menyimpan nilai mahasiswa untuk kelas dan jenis penilaian tertentu.
    * `scores` - menyimpan nilai mahasiswa untuk setiap penilaian.
    * `nilai_akhir` - menyimpan nilai akhir mahasiswa untuk setiap kelas.


## 🛠 Teknologi yang Digunakan

* HTML untuk struktur.
* CSS untuk styling.
* PHP untuk fungsionalitas dinamis.
* MySQL untuk database manajemen.

## 📂 Struktur Direktori
sistem-informasi-nilai-timnilaiin/
├── admin/
│   ├── admin.php
│   ├── dosen.php
│   ├── mahasiswa.php
│   └── assets/
│       ├── css/
│       │   ├── admin.css
│       │   ├── dosen.css
│       │   └── mahasiswa.css
│       └── img/
│           ├── krs.png
│           ├── logo-nilaiin-hijau.png
│           ├── logo-nilaiin-putih-crop.png
│           ├── logo-nilaiin-putih.png
│           ├── pamflet-ui.png
│           ├── profile-mhs copy.png
│           ├── profile-mhs.png
│           └── wisuda.png
├── auth/
│   ├── login.css
│   ├── login.php
│   └── urp-univ.png
├── index.php
├── README.md
└── .gitignore
