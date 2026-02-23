# Laporan Praktikum Pemrograman Web Lanjut

## Identitas Mahasiswa

| Keterangan | Data |
|------------|------|
| **Nama**   | Fikar Bahrul Santoso |
| **NIM**    | 244107020160 |
| **Kelas**  | TI-2F |

---
## Persiapan
* **Laravel menggunakan MVC (Model, View, Controller)**

*  Model berisi semua metode dan atribut yang diperlukan untuk berinteraksi dengan skema database yang ditentukan.
* View mewakili bagaimana informasi ditampilkan, digunakan untuk semua logika 
antarmuka pengguna perangkat lunak(bagian Frontend).
* Controller berperan sebagai perantara antara Model dan View, memproses semua 
masukan yang dikirim oleh pengguna dari View(bagian Backend).

---

* **Route**
* Route ini digunakan sebagai penghubung antara user dengan aplikasi (penentu URL).
Route yang umum digunakan :<br><br>
[detail Route](DokumentasiPWL/img/detail-route.png)
---
## Praktikum 1
<details>
<summary>Detail</summary>

* Modifikasi Web Routes /hello<br><br>
![Modifikasi web routes](DokumentasiPWL/img/prak1-modifikasi_web_routes.png)

* Penjelasan :
Route Web /hello akan memanggil suatu fungsi yang bisa menampilkan kata "hello" sebagai respon

* Modifikasi Web Routes /world<br><br>
![Modifikasi web routes](DokumentasiPWL/img/prak1-modifikasi_web_routes2.png)
* Penjelasan :
Route Web /world akan memanggil suatu fungsi yang bisa menampilkan kata "world" sebagai respon tanpa "hello" yang tadi

* Modifikasi Web Routes / seperti landing page<br><br>
![Modifikasi web routes](DokumentasiPWL/img/prak1-modifikasi_web_routes3.png)

* Modifikasi Web Routes /about berisi identitas<br><br>
![Modifikasi web routes](DokumentasiPWL/img/prak1-modifikasi_web_routes4.png)
---

* **Route Parameter**
* Modifikasi Web Routes /user/{name}<br><br>
![Modifikasi web routes](DokumentasiPWL/img/prak1-modifikasi_web_routes5.png)
* Penjelasan :
halaman akan menampilkan teks "Nama saya [nama yang dimasukkan]" sesuai parameter tersebut melalui URL.

* Modifikasi Web Routes /posts/1/comments/5<br><br>
![Modifikasi web routes](DokumentasiPWL/img/prak1-modifikasi_web_routes6.png)
* Penjelasan :
Kode Route ini menangani URL dengan dua parameter dinamis ({post} dan {comment}), lalu menampilkan teks yang berisi ID post dan ID komentar yang diakses melalui variabel $postId dan $commentId.

* Modifikasi Web Routes /articles<br><br>
![Modifikasi web routes](DokumentasiPWL/img/prak1-modifikasi_web_routes7.png)

---
* Modifikasi Web Routes /user<br><br>
![Modifikasi web routes](DokumentasiPWL/img/prak1-modifikasi_web_routes8.png)
* Penjelasan :
halaman akan menampilkan teks "Nama saya" tanpa tambahan karena variabel null

* Modifikasi Web Routes /user<br><br>
![Modifikasi web routes](DokumentasiPWL/img/prak1-modifikasi_web_routes9.png)
* Penjelasan :
halaman akan menampilkan teks "Nama saya John" karena variabel sudah terisi nama John.

</details>

---

## Praktikum 2
<details>
<summary>Detail</summary>

*  Generate Controller dengan php artisan make
<br><br>
![Generate controller](DokumentasiPWL/img/prak2-generate_controller.png)

<br><br>

*  Penggunaan Controller <br><br>
![Modifikasi controller](DokumentasiPWL/img/prak2-modifikasi_controller.png)

* penjelasan :  jika http://127.0.0.1:8000/hello dieksekusi di browser, Laravel akan mencari route yang cocok di web.php, terus memerintah WelcomeController untuk menjalankan method hello()

<br><br>

* Modifikasi Controller <br><br>
![Modifikasi controller](DokumentasiPWL/img/prak2-modifikasi_controller2.png)

<br><br>

* Modifikasi Controller <br><br>
![Modifikasi controller](DokumentasiPWL/img/prak2-modifikasi_controller3.png)

* **Resource Controller**

* Modifikasi Resource Controller <br><br>
![Modifikasi controller](DokumentasiPWL/img/prak2-modifikasi_controller4.png)
</details>

---

## Praktikum 3
<details>
<summary>Detail</summary>

* Menjalankan View <br><br>
![Menjalankan View](DokumentasiPWL/img/prak3-pemanggilan_view.png)
<br><br>

* Menjalankan View <br><br>
![Menjalankan View](DokumentasiPWL/img/prak3-pemanggilan_view.png)
<br><br>

* Menjalankan View dari blog <br><br>
![Menjalankan View](DokumentasiPWL/img/prak3-pemanggilan_view2.png)
<br><br>

* Penjelasan :
/greeting diakses, Laravel meneruskan request ke method greeting() pada WelcomeController yang kemudian me-return view blog.hello dengan data name bernilai 'Fikar' sehingga browser menampilkan teks "Hello, Fikar".

* Menjalankan View dengan with <br><br>
![Menjalankan View](DokumentasiPWL/img/prak3-pemanggilan_view3.png)
<br><br>

* Penjelasan :
 method greeting() diubah menggunakan method chaining ->with() dan view hello.blade.php ditambahkan variabel $occupation, maka browser menampilkan dua baris teks yaitu "Hello, Fikar" dan "You are College Student" yang datanya dikirim secara terpisah dari controller ke view.

---

</details>

---