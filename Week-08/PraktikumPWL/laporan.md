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
