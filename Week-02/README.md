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

</details>

---

## Praktikum 3
<details>
<summary>Detail</summary>


---

</details>

---