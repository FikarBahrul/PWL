# Laporan Praktikum Pemrograman Web Lanjut

## Identitas Mahasiswa

| Keterangan | Data |
|------------|------|
| **Nama**   | Fikar Bahrul Santoso |
| **NIM**    | 244107020160 |
| **Kelas**  | TI-2F |

---

## Jobsheet 1
<details>
<summary>Detail</summary>

**Membuat Resource Post**

![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_CreateFilamentResoPost.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_CreateFilamentResoPost2.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_CreateFilamentResoPost3.png)

<br><br>

**Modifikasi untuk Text Input**

![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeTextInput.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeTextInput2.png)

<br><br>

**Modifikasi untuk Memilih Kategori**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeCategorySelect.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeCategorySelect2.png)

<br><br>

**Modifikasi untuk Memilih Warna (Color Picker)**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeColorPicker.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeColorPicker2.png)

<br><br>

**Modifikasi untuk Markdown Editor**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeMarkdownEditor.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeMarkdownEditor2.png)

<br><br>

**Modifikasi untuk File Upload**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeFileUpload.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeFileUpload2.png)

<br><br>

**Modifikasi untuk Tags Input**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeTagsInput.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeTagsInput2.png)

<br><br>

**Modifikasi untuk Checkbox**

![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeCheckbox.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeCheckbox2.png)

<br><br>

**Modifikasi untuk Memilih Tanggal/Waktu (DateTimePicker)**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeDateTimePicker.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_ModifiedCodeDateTimePicker2.png)

<br><br>

**Menampilkan Data di Table**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_CreatePost.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_CreatePost2.png)

<br><br>

**Pengujian**
Membuat Post Baru dan Check hasil post di Database
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_CreatePostPengujian.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_CreatePostPengujian2.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01_CreatePostPengujian3.png)

## I. Analisis & Diskusi

### 1. Mengapa kita perlu storage:link?
Perintah `storage:link` membuat symbolic link dari folder `storage/app/public` ke `public/storage` agar file upload bisa diakses browser. Tanpa link ini, file sebenarnya tersimpan di server tetapi tidak bisa ditampilkan dari URL publik, sehingga gambar di tabel atau halaman detail akan terlihat rusak/pecah.

### 2. Apa fungsi $casts untuk field JSON?
`$casts` dipakai agar data JSON dari database otomatis dikonversi ke tipe data PHP yang sesuai. Contohnya field `tags` yang disimpan sebagai JSON string dapat langsung dipakai sebagai array dengan menulis `'tags' => 'array'`. Saat disimpan kembali, Laravel juga otomatis mengubah array itu ke format JSON.

### 3. Mengapa kita menggunakan category.name bukan category_id?
`category_id` hanya menampilkan angka ID, sedangkan `category.name` menampilkan nama kategori yang lebih informatif bagi pengguna. Di Filament Table, penulisan `category.name` memanfaatkan relasi Eloquent (`belongsTo`) sehingga data yang tampil lebih jelas dan mudah dibaca.

### 4. Apa perbedaan RichEditor dan MarkdownEditor?
RichEditor menghasilkan konten HTML (WYSIWYG), cocok untuk pengguna non-teknis karena format bisa langsung dilihat saat mengetik. MarkdownEditor menyimpan teks dengan sintaks Markdown, lebih ringan, rapi, dan cocok untuk konten yang ingin mudah dipindah/di-versioning. Jadi, pilih RichEditor untuk kemudahan visual, dan pilih MarkdownEditor untuk kesederhanaan struktur teks.




</details>

---


## Jobsheet 2
<details>
<summary>Detail</summary>

**Menambahkan 3 Kolom**
<br>

![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumn.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumn2.png)

**atau Menambahkan 2 Kolom**
<br>

![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumn3.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumn4.png)

**Section Kolom**
<br>

![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumnSection.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumnSection2.png)

**Section Meta**
<br>

![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumnSectionMeta.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumnSectionMeta2.png)

**Section Layout**
<br>

![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumnSectionLayoutSpan.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumnSectionLayoutSpan2.png)

**Section Group Layout**
<br>

![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumnSectionGroupLayout.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02_CreateColumnSectionGroupLayout2.png)

**Mengatur Lebar Field Individual**
<br>

![Jobsheet-02_Filament](DokumentasiPWL/img//JS02_CreateColumnField.png)
![Jobsheet-02_Filament](DokumentasiPWL/img//JS02_CreateColumnField2.png)

## E. Analisis & Diskusi

### 1. Mengapa layout form penting dalam aplikasi admin?
Layout form yang baik membuat proses input data lebih cepat, minim salah isi, dan lebih nyaman dipakai. Dalam aplikasi admin, pengguna sering bekerja dengan banyak field sekaligus, jadi struktur visual yang jelas membantu mereka memahami prioritas data, alur pengisian, dan relasi antar field. Hasilnya, efisiensi kerja meningkat dan kualitas data yang masuk juga lebih konsisten.

### 2. Apa perbedaan Section dan Group?
`Section` adalah komponen pembungkus yang menampilkan blok UI lengkap dengan judul dan deskripsi, sehingga cocok untuk membagi form berdasarkan konteks bisnis (misalnya Post Details, Image Upload, Meta Information). `Group` lebih berfungsi sebagai pengatur layout tanpa elemen header visual yang menonjol. Jadi, `Section` fokus pada struktur konten yang terlihat pengguna, sedangkan `Group` fokus pada pengaturan tata letak komponen.

### 3. Kapan kita menggunakan columnSpanFull()?
`columnSpanFull()` digunakan ketika sebuah field perlu mengambil lebar penuh grid agar lebih nyaman digunakan. Contoh umum: editor konten panjang, textarea besar, atau komponen upload yang butuh ruang horizontal lebih luas. Dengan `columnSpanFull()`, field tidak terbatasi pembagian kolom kecil, sehingga pengalaman input menjadi lebih baik.

### 4. Apa keuntungan sistem grid 12 kolom?
Grid 12 kolom memberi fleksibilitas tinggi dalam menyusun layout karena angka 12 mudah dibagi menjadi berbagai kombinasi (1/2, 1/3, 1/4, 2/3, dan seterusnya). Ini memudahkan pembuatan form yang proporsional, konsisten, dan responsif di berbagai ukuran layar. Dalam praktiknya, developer lebih mudah mengatur komponen prioritas tinggi agar lebih dominan, sementara komponen pendukung ditempatkan pada area yang lebih kecil.

</details>

---