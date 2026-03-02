# Laporan Praktikum Pemrograman Web Lanjut

## Identitas Mahasiswa

| Keterangan | Data |
|------------|------|
| **Nama**   | Fikar Bahrul Santoso |
| **NIM**    | 244107020160 |
| **Kelas**  | TI-2F |

---
## Persiapan
* **Migration**

*  Dalam pertemuan ini akan mempelajari tentang migrasi, seed dan model yang akan masuk ke dalam Database
---
## Praktikum 1
<details>
<summary>Detail</summary>

* Buka aplikasi phpMyAdmin, dan buat database baru dengan nama PWL_POS<br><br>
![Week-03_Praktikum-01](DokumentasiPWL/img/Week-03/PhpMyAdmin_Praktikum1.png)

* Generate Key di .env<br><br>
![Week-03_Praktikum-01](DokumentasiPWL/img/Week-03/GenerateKey_Praktikum1.png)

* Edit .env<br><br>
![Week-03_Praktikum-01](DokumentasiPWL/img/Week-03/Edit-.env_Praktikum1.png)

</details>
---

## Praktikum 2.1
<details>
<summary>Detail</summary>

* Default Migration File yang sudah ada dari Laravel<br><br>
![Week-03_Praktikum-02.1](DokumentasiPWL/img/Week-03/DefaultMigration_Praktikum2.1.png)

* Buat File Migration baru (m_level)<br><br>
![Week-03_Praktikum-02.1](DokumentasiPWL/img/Week-03/m_level_table-Migration_Praktikum2.1.png)

* Proses Migrasi<br><br>
![Week-03_Praktikum-02.1](DokumentasiPWL/img/Week-03/ProsesMigrasi_Praktikum2.1.png)

* Buat File Migration baru (m_kategori & m_supplier)<br><br>
![Week-03_Praktikum-02.1](DokumentasiPWL/img/Week-03/m_kategori_table&m_supplier_table-Migration_Praktikum2.1.png)

* Proses Migrasi kembali<br><br>
![Week-03_Praktikum-02.1](DokumentasiPWL/img/Week-03/ProsesMigrasi2_Praktikum2.1.png)
</details>
---

## Praktikum 2.2
<details>
<summary>Detail</summary>

* Migrasi m_user<br><br>
![Week-03_Praktikum-02.2](DokumentasiPWL/img/Week-03/ProsesMigrasi3_Praktikum2.2.png)

* DB Design<br><br>
![Week-03_Praktikum-02.2](DokumentasiPWL/img/Week-03/DBdesign_praktikum2.2.png)

</details>
---

## Praktikum 3
<details>
<summary>Detail</summary>

* Buat Seeder untuk table m_level <br><br>
![Week-03_Praktikum-03](DokumentasiPWL/img/Week-03/MakeSeeder_praktikum3.png)

* Buat fungsi run untuk table m_level <br><br>
![Week-03_Praktikum-03](DokumentasiPWL/img/Week-03/MakeSeederRun_praktikum3.png)

* Jalankan seeder untuk m_level <br><br>
![Week-03_Praktikum-03](DokumentasiPWL/img/Week-03/MakeSeederRun2_praktikum3.png)

* Tambahkan & Jalankan seeder untuk m_user <br><br>
![Week-03_Praktikum-03](DokumentasiPWL/img/Week-03/MakeSeederRun3_praktikum3.png)

* Tambahkan & Jalankan seeder untuk tabel lain <br><br>
</details>
---

## Praktikum 4
<details>
<summary>Detail</summary>

* Buat LevelController <br><br>
![Week-03_Praktikum-04](DokumentasiPWL/img/Week-03/LevelController_Praktikum4.png)

* Modifikasi Web.PHP <br><br>
![Week-03_Praktikum-04](DokumentasiPWL/img/Week-03/ModifiedWeb.php_Praktikum4.png)

* Modifikasi Level Controller <br><br>
![Week-03_Praktikum-04](DokumentasiPWL/img/Week-03/ModifiedLevelController.php_Praktikum4.png)
<br><br>

* Modifikasi Level Controller <br><br>
![Week-03_Praktikum-04](DokumentasiPWL/img/Week-03/ModifiedLevelController.php2_Praktikum4.png)
<br><br>

* Modifikasi Level Controller <br><br>
![Week-03_Praktikum-04](DokumentasiPWL/img/Week-03/ModifiedLevelController.php3_Praktikum4.png)
<br><br>

* Modifikasi Level Controller <br><br>
![Week-03_Praktikum-04](DokumentasiPWL/img/Week-03/ModifiedLevelController.php4_Praktikum4.png)
<br><br>

* Modifikasi Level Controller <br><br>
![Week-03_Praktikum-04](DokumentasiPWL/img/Week-03/ModifiedLevelController.php5_Praktikum4.png)

* Eksekusi LevelBlade<br><br>
![Week-03_Praktikum-04](DokumentasiPWL/img/Week-03/Level.Blade.php_Praktikum4.png)
</details>
---

## Praktikum 5
<details>
<summary>Detail</summary>

* Eksekusi Kategori<br><br>
![Week-03_Praktikum-05](DokumentasiPWL/img/Week-03/Kategori_Praktikum5.png)

</details>
---

## Praktikum 6
<details>
<summary>Detail</summary>

* Eksekusi User<br><br>

![Week-03_Praktikum-06](DokumentasiPWL/img/Week-03/User_Praktikum6.png)

</details>
---

## Penutup

<details>
<summary>Detail</summary>

1. **Pada Praktikum 1 - Tahap 5, apakah fungsi dari APP_KEY pada file setting .env Laravel?**
   APP_KEY berfungsi sebagai kunci enkripsi untuk mengamankan data sesi dan cookie pada aplikasi Laravel.

2. **Pada Praktikum 1, bagaimana kita men-generate nilai untuk APP_KEY?**
   Nilai APP_KEY dapat di-generate menggunakan perintah `php artisan key:generate` pada terminal.

3. **Pada Praktikum 2.1 - Tahap 1, secara default Laravel memiliki berapa file migrasi? dan untuk apa saja file migrasi tersebut?**
   Secara default Laravel memiliki **4 file migrasi**, yaitu untuk tabel `users`, `password_reset_tokens`, `failed_jobs`, dan `personal_access_tokens`.

4. **Secara default, file migrasi terdapat kode $table->timestamps();, apa tujuan/output dari fungsi tersebut?**
   Fungsi `$table->timestamps()` digunakan untuk membuat dua kolom otomatis yaitu `created_at` dan `updated_at` yang menyimpan waktu data dibuat dan diubah.

5. **Pada File Migrasi, terdapat fungsi $table->id(); Tipe data apa yang dihasilkan dari fungsi tersebut?**
   Fungsi `$table->id()` menghasilkan tipe data **BIGINT UNSIGNED AUTO INCREMENT** sebagai primary key.

6. **Apa bedanya hasil migrasi pada table m_level, antara menggunakan $table->id(); dengan menggunakan $table->id('level_id');?**
   Perbedaannya adalah `$table->id()` membuat kolom primary key dengan nama `id`, sedangkan `$table->id('level_id')` membuat kolom primary key dengan nama `level_id`.

7. **Pada migration, Fungsi ->unique() digunakan untuk apa?**
   Fungsi `->unique()` digunakan untuk memastikan tidak ada nilai yang sama/duplikat pada kolom tersebut.

8. **Pada Praktikum 2.2 - Tahap 2, kenapa kolom level_id pada tabel m_user menggunakan $tabel->unsignedBigInteger('level_id'), sedangkan kolom level_id pada tabel m_level menggunakan $tabel->id('level_id')?**
   Kolom `level_id` pada `m_user` menggunakan `unsignedBigInteger` karena hanya sebagai foreign key biasa, sedangkan pada `m_level` menggunakan `id('level_id')` karena sebagai primary key yang auto increment.

9. **Pada Praktikum 3 - Tahap 6, apa tujuan dari Class Hash? dan apa maksud dari kode program Hash::make('1234');?**
   Class `Hash` digunakan untuk mengenkripsi data agar tidak tersimpan dalam bentuk teks biasa, dan `Hash::make('1234')` berarti mengenkripsi string `1234` menjadi bentuk hash.

10. **Pada Praktikum 4 - Tahap 3/5/7, pada query builder terdapat tanda tanya (?), apa kegunaan dari tanda tanya (?) tersebut?**
    Tanda tanya `(?)` pada query builder berfungsi sebagai **placeholder** untuk mencegah SQL injection, nilainya diisi dari array parameter yang diberikan.

11. **Pada Praktikum 6 - Tahap 3, apa tujuan penulisan kode protected $table = 'm_user'; dan protected $primaryKey = 'user_id';?**
    `protected $table = 'm_user'` bertujuan untuk memberitahu Eloquent nama tabel yang digunakan, dan `protected $primaryKey = 'user_id'` untuk memberitahu Eloquent nama kolom primary key pada tabel tersebut.

12. **Menurut kalian, lebih mudah menggunakan mana dalam melakukan operasi CRUD ke database (DB Façade / Query Builder / Eloquent ORM)? jelaskan**
    Menurut saya **Eloquent ORM** lebih mudah digunakan karena penulisannya lebih ringkas dan tidak perlu menulis query SQL secara langsung.

</details>