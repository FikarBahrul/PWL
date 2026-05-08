# Laporan Praktikum Pemrograman Web Lanjut

## Identitas Mahasiswa

| Keterangan | Data |
|------------|------|
| **Nama**   | Fikar Bahrul Santoso |
| **NIM**    | 244107020160 |
| **Kelas**  | TI-2F |

---

## Jobsheet 1 (Jika sesuai GClass Jobsheet 10)
<details>
<summary>Detail</summary>

**Membuat Sort untuk Title**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortTitle.png)
<br><br>

**Sort untuk Title (Ascending)**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortTitle2asc.png)

<br><br>

**Sort untuk Title (Descending)**
![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortTitle2desc.png)
<br><br>
<br><br>

**Membuat Sort untuk Slug**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortSlug.png)
<br><br>

**Sort untuk Slug (Ascending)**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortSlug2asc.png)

<br><br>

**Sort untuk Slug (Descending)**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortSlug2desc.png)

<br><br>
<br><br>

**Membuat Sort untuk Category**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortCategory.png)
<br><br>

**Sort untuk Category (Ascending)**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortCategory2asc.png)

<br><br>

**Sort untuk Category (Descending)**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortCategory2desc.png)

<br><br>
<br><br>

**Membuat Sort untuk Created At (Tanggal)**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortCreatedAt.png)

<br><br>

**Sort untuk Created At (Ascending)**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortCreatedAt2asc.png)

<br><br>

**Sort untuk Created At (Descending)**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortCreatedAt2desc.png)

<br><br>
<br><br>

**Mengatur Default Sorting**

![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortCreatedAtDefault.png)
![Jobsheet-010_Filament](DokumentasiPWL/img/JS01_SortCreatedAtDefault2.png)
<br><br>

## L. Analisis & Diskusi

### 1. Mengapa sorting penting pada admin panel?
Sorting adalah fitur krusial di admin panel karena membantu pengguna menemukan data dengan cepat tanpa harus scroll panjang atau menggunakan filter yang kompleks. Saat data berkembang jutaan record, kemampuan mengurutkan berdasarkan judul, tanggal, atau kategori membuat manajemen data jauh lebih efisien. Tanpa sorting, pengguna akan kesulitan mengidentifikasi record terbaru, terpopuler, atau bermasalah, sehingga produktivitas admin panel menurun signifikan.

### 2. Apa perbedaan sortable biasa dengan defaultSort()?
`sortable()` adalah metode yang mengaktifkan fitur sorting interaktif pada kolom tertentu di tabel, memungkinkan pengguna mengklik header kolom untuk mengurutkan ascending atau descending sesuai kebutuhan mereka saat itu. Sedangkan `defaultSort()` menetapkan urutan default ketika halaman pertama kali dimuat, tanpa pengguna harus melakukan aksi apapun. Singkatnya, `sortable()` memberikan kontrol kepada pengguna, sementara `defaultSort()` menyiapkan pengalaman awal yang optimal berdasarkan preferensi aplikasi.

### 3. Mengapa relasi tetap bisa di-sort?
Relasi tetap bisa di-sort karena Filament secara otomatis menangani join antar tabel saat diperlukan. Saat developer menulis `TextColumn::make('category.name')->sortable()`, Filament mendeteksi bahwa 'category' adalah relasi dan secara smart membuat query dengan JOIN ke tabel categories, kemudian mengurutkan berdasarkan kolom 'name' di tabel relasi tersebut. Pendekatan ini membebaskan developer dari menulis query manual yang kompleks, sehingga sorting relasi terasa seamless dan natural.

### 4. Kapan kita menggunakan desc sebagai default?
`desc` (descending) digunakan sebagai default ketika data terbaru atau terpenting perlu ditampilkan paling atas. Contoh umum adalah sorting tanggal pembuatan dengan `->defaultSort('created_at', 'desc')` sehingga post atau artikel terbaru tampil duluan. Demikian pula untuk kolom views atau popularity, menampilkan yang paling banyak dilihat duluan membuat pengguna langsung melihat konten paling relevan. Sebaliknya, `asc` cocok untuk data yang diurutkan alfabetik atau berdasarkan prioritas ranking dari kecil ke besar, misalnya ID atau nomor urut.

</details>

---

## Jobsheet 2 (Jika sesuai GClass Jobsheet 11)
<details>
<summary>Detail</summary>

**Membuat Search untuk Title**

![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_SearchTitle.png)
<br><br>

**Search untuk Title (Hasil)**
![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_SearchTitle2.png)
<br><br>

**Membuat Search untuk Slug**

![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_SearchSlug.png)
<br><br>

**Search untuk Slug (Hasil)**

![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_SearchSlug2.png)
<br><br>
<br><br>

**Membuat Search untuk Category**

![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_SearchCategory.png)
<br><br>

**Search untuk Category (Hasil)**

![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_SearchCategory2.png)
<br><br>
<br><br>

**Membuat Filter untuk Created At**

![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_FilterCreatedAt.png)
<br><br>

**Filter untuk Created At (Hasil)**

![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_FilterCreatedAt2.png)

<br><br>
<br><br>

**Membuat Query Logic untuk Created At**

![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_QueryLogicCreatedAt.png)
<br><br>

**Membuat Query Logic untuk Created At (Hasil Logika)**
![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_QueryLogicCreatedAt2.png)
<br><br>
<br><br>

**Membuat Filter untuk Created At(Relasi Dengan Category)**
![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_FilterCreatedAtCategory.png)
<br><br>

**Membuat Filter untuk Created At(Relasi Dengan Category)(Hasil)**
![Jobsheet-011_Filament](DokumentasiPWL/img/JS02_FilterCreatedAtCategory2.png)
 
## H. Analisis & Diskusi

### 1. Mengapa search tidak cocok untuk filter tanggal?
Search (text search) dirancang untuk pencocokan teks/substring dan tidak sensitif terhadap format waktu. Field tanggal biasanya menyimpan tanggal + waktu (`datetime`), sehingga pencarian teks akan sulit menangkap semua variasi format dan rentang (mis. semua record pada satu hari). Untuk kebutuhan tanggal lebih tepat menggunakan filter berbasis DatePicker yang menghasilkan query `whereDate` atau range, sehingga hasilnya akurat dan konsisten.

### 2. Apa fungsi `relationship()` pada `SelectFilter`?
`relationship('category', 'name')` memberi tahu Filament bahwa opsi filter diambil dari relasi Eloquent `category` dan menampilkan kolom `name` sebagai label. Filament otomatis memuat (preload) data relasi dan membuat filter yang menghubungkan `category_id` ke tabel categories, sehingga pengguna bisa memilih kategori tanpa menulis query manual.

### 3. Mengapa kita perlu `whereDate()` pada query filter?
Kolom `created_at` biasanya bertipe `datetime` (mencakup waktu). Jika ingin memfilter berdasarkan tanggal saja (abaikan jam), gunakan `whereDate('created_at', $date)` supaya perbandingan hanya pada bagian tanggal, bukan seluruh timestamp. Ini mencegah mismatch ketika waktu berbeda namun tanggalnya sama.

### 4. Apa perbedaan `searchable()` dan `filters()`?
`searchable()` mengaktifkan pencarian teks (global atau per-kolom) dan berguna untuk menemukan record lewat kata kunci cepat. `filters()` menyediakan kontrol terstruktur (DatePicker, SelectFilter, dll.) yang menghasilkan query spesifik (mis. range, relasi, exact match). Singkatnya: `searchable()` untuk pencarian teks fleksibel; `filters()` untuk kriteria terstruktur dan presisi.


</details>

---