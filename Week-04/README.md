# Laporan Praktikum Pemrograman Web Lanjut

## Identitas Mahasiswa

| Keterangan | Data |
|------------|------|
| **Nama**   | Fikar Bahrul Santoso |
| **NIM**    | 244107020160 |
| **Kelas**  | TI-2F |

---
## Persiapan

<details>
<summary>Detail</summary>

* Topik pembelajaran pada Week 4 membahas penggunaan Model dan Eloquent ORM dalam Laravel untuk mengelola data pada database secara lebih mudah dan terstruktur. Materi dimulai dari penggunaan mass assignment dengan $fillable untuk menentukan kolom yang boleh diisi secara otomatis demi menjaga keamanan data. Selanjutnya dipelajari berbagai cara mengambil data dari database seperti find(), first(), dan where(), serta exception handling menggunakan findOrFail() atau firstOrFail() ketika data tidak ditemukan. Selain itu, dibahas juga aggregate functions seperti count(), sum(), avg(), max(), dan min() untuk memperoleh statistik data. Praktikum ini juga mencakup operasi CRUD (Create, Read, Update, Delete) menggunakan Eloquent yang mempermudah manipulasi data, serta database relationships seperti belongsTo, hasMany, hasOne, dan belongsToMany untuk menghubungkan data antar tabel dalam database.

</details>

---
## Praktikum 1
<details>
<summary>Detail</summary>
Pada Praktikum 1 dilakukan pengujian penggunaan properti **$fillable** pada model Laravel. Properti ini digunakan untuk menentukan kolom mana saja pada tabel yang boleh diisi menggunakan fitur **mass assignment** seperti method `create()` atau `update()`. Dengan adanya `$fillable`, Laravel dapat membatasi atribut yang boleh dimasukkan ke database sehingga dapat meningkatkan keamanan aplikasi.
<br><br>
Pada langkah pertama,file **UserModel.php** dimodifikasi dengan menambahkan variabel `$fillable` yang berisi daftar atribut seperti `username`, `nama`, `password`, dan `level_id`. Konfigurasi ini memungkinkan data tersebut dapat diisi secara langsung melalui controller tanpa harus menetapkan nilai satu per satu.

![Praktikum 1 - Konfigurasi Fillable](DokumentasiPWL/img/Week-04/$fillable_src-Praktikum-01.png)

Selanjutnya pada **UserController.php**, proses penambahan data diubah menggunakan metode mass assignment dengan memasukkan data dalam bentuk array. Dengan cara ini, Laravel akan secara otomatis mengisi atribut model sesuai dengan kolom yang telah didaftarkan pada `$fillable`.

![Praktikum 1 - Hasil pada Browser](DokumentasiPWL/img/Week-04/$fillable_browser-Praktikum-01.png)

Dari hasil pengujian dapat disimpulkan bahwa `$fillable` berfungsi sebagai mekanisme pengamanan dalam Eloquent ORM untuk mengontrol atribut yang dapat diisi secara massal. Jika suatu kolom tidak terdaftar di `$fillable`, maka Laravel tidak akan memproses input tersebut saat melakukan penyimpanan data ke database.

</details>
---