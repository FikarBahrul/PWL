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

**Membuat Product Table**

![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-CreateProductTableMigration.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-CreateProductTableMigration2.png)
<br><br>
<br><br>

**Check Product Table pada Database(Migrate)**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-MigrateProductTable.png)

<br><br>
<br><br>

**Membuat Models dari Table Product**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ModelsProductTable.png)
<br><br>
<br><br>

**Membuat Resource Filament untuk Table Product**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-CreateResourceFilamentProductTable.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-CreateResourceFilamentProductTable2.png)
<br><br>
<br><br>

**Membuat Wizard Form untuk Product**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ImplementWizardFormProduct.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ImplementWizardFormProduct2.png)
<br><br>

![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ImplementWizardFormProduct3.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ImplementWizardFormProduct4.png)
<br><br>

![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ImplementWizardFormProduct5.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ImplementWizardFormProduct6.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ImplementWizardFormProduct7.png)
<br><br>

![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ImplementWizardFormProduct8.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-ImplementWizardFormProduct9.png)
<br><br>
<br><br>

**Menampilkan Product (Termasuk Pengujian)**
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-RevealDataProduct.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-RevealDataProduct2.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-RevealDataProduct3.png)
<br><br>

![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-RevealDataProduct4.png)
![Jobsheet-01_Filament](DokumentasiPWL/img/JS01-RevealDataProduct5.png)


## L. Analisis & Diskusi

### 1. Mengapa Wizard Form lebih baik untuk form panjang?
Wizard Form membagi input menjadi beberapa langkah kecil sehingga pengguna tidak merasa kewalahan melihat banyak field sekaligus. Pendekatan ini membuat fokus per tahap lebih jelas, mengurangi kesalahan input, dan mempercepat proses pengisian karena pengguna memahami alur data dari awal sampai akhir.

### 2. Kapan kita menggunakan skippable()?
`skippable()` digunakan ketika ada langkah wizard yang bersifat opsional atau tidak selalu relevan untuk semua kondisi data. Contohnya, langkah upload media bisa dilewati jika produk belum memiliki gambar saat awal dibuat. Dengan begitu, alur tetap fleksibel tanpa memaksa pengguna mengisi data yang belum diperlukan.

### 3. Apa kelebihan multi step dibanding single form panjang?
Multi step memiliki kelebihan pada struktur dan pengalaman pengguna: form lebih rapi, progres pengisian terlihat, validasi bisa dilakukan per langkah, dan beban kognitif pengguna lebih ringan. Dibanding single form panjang yang cenderung penuh dan melelahkan, multi step membuat proses input lebih terarah dan minim error.

### 4. Apakah wizard cocok untuk semua jenis form?
Wizard tidak selalu cocok untuk semua form. Untuk form sederhana dengan sedikit field, single form biasanya lebih cepat dan efisien. Wizard lebih tepat dipakai pada form kompleks, field banyak, atau proses yang punya urutan logis antar tahap. Jadi, pemilihan pendekatan perlu disesuaikan dengan kompleksitas data dan kebutuhan pengguna.

</details>

---

## Jobsheet 2
<details>
<summary>Detail</summary>

**Section Product Info**
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo2.png)
<br><br>

**Section Product Price and Stock**
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo3.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo4.png)
<br><br>

**Section Product Image and Status**
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo5.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo6.png)
<br><br>

**Section Product Price and Stock Entry Icon**
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo7.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo8.png)
<br><br>

**Section Product Creation Date**
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo9.png)
![Jobsheet-02_Filament](DokumentasiPWL/img/JS02-SectionProductInfo10.png)
<br><br>

## L. Analisis & Diskusi

### 1. Mengapa View Page tidak cocok menggunakan form input?
View Page berfungsi untuk menampilkan data secara read-only, bukan untuk mengubah data. Jika komponen form input dipakai di halaman view, pengguna bisa mengira data dapat diedit langsung, sehingga membingungkan alur penggunaan. Karena itu, View Page lebih tepat memakai komponen display seperti Infolist agar informasi tetap jelas, rapi, dan konsisten dengan tujuan halaman.

### 2. Apa perbedaan TextColumn dan TextEntry?
`TextColumn` digunakan pada Table (halaman list) untuk menampilkan nilai dalam bentuk kolom pada banyak record sekaligus. `TextEntry` digunakan pada Infolist (halaman detail/view) untuk menampilkan nilai satu record secara lebih terstruktur. Singkatnya, `TextColumn` untuk konteks daftar data, sedangkan `TextEntry` untuk konteks detail data.

### 3. Kapan kita menggunakan badge?
Badge digunakan ketika nilai field perlu ditonjolkan secara visual, terutama untuk status atau kategori singkat seperti aktif/nonaktif, featured/non-featured, atau level prioritas. Dengan badge, pengguna bisa mengenali kondisi data lebih cepat tanpa harus membaca teks panjang, sehingga proses monitoring di admin panel menjadi lebih efisien.

### 4. Apa keuntungan menggunakan IconEntry untuk boolean?
`IconEntry` sangat efektif untuk data boolean karena informasi true/false bisa dipahami secara instan melalui ikon (misalnya centang dan silang). Dibanding teks biasa, ikon lebih cepat dipindai di layar dan membantu mengurangi salah baca saat melihat banyak data. Selain itu, tampilan jadi lebih ringkas dan konsisten di halaman detail.

</details>

---

## Jobsheet 3
<details>
<summary>Detail</summary>

**Merubah Section Product menjadi Tabs**
<br><br>

**Merubah Section Product Info menjadi Tabs**
![Jobsheet-03_Filament](DokumentasiPWL/img/JS03-ChangeSectionToTabs.png)
![Jobsheet-03_Filament](DokumentasiPWL/img/JS03-ChangeSectionToTabs2.png)
<br><br>

**Merubah Section Product Price and Stock menjadi Tabs**
![Jobsheet-03_Filament](DokumentasiPWL/img/JS03-ChangeSectionToTabs3.png)
![Jobsheet-03_Filament](DokumentasiPWL/img/JS03-ChangeSectionToTabs4.png)
<br><br>

**Merubah Section Product Image and Status menjadi Tabs**
![Jobsheet-03_Filament](DokumentasiPWL/img/JS03-ChangeSectionToTabs5.png)
![Jobsheet-03_Filament](DokumentasiPWL/img/JS03-ChangeSectionToTabs6.png)
<br><br>

**Merubah Tampilan Menjadi Vertikal**
![Jobsheet-03_Filament](DokumentasiPWL/img/JS03-ChangeSectionToTabs7.png)
![Jobsheet-03_Filament](DokumentasiPWL/img/JS03-ChangeSectionToTabs8.png)

<br><br>

## K. Analisis & Diskusi

### 1. Kapan kita menggunakan Tabs dibanding Section?
Tabs digunakan saat konten cukup banyak dan bisa dikelompokkan ke beberapa kategori agar tampilan tidak terlalu panjang. Dibanding Section biasa yang ditampilkan sekaligus dalam satu halaman, Tabs membantu pengguna fokus pada satu kelompok informasi dalam satu waktu. Pendekatan ini cocok ketika data memiliki struktur yang jelas per bagian, misalnya informasi umum, harga-stok, dan media-status.

### 2. Apa kelebihan Tabs untuk data panjang?
Kelebihan utama Tabs adalah menjaga antarmuka tetap rapi dan ringkas meskipun field banyak. Pengguna tidak perlu scroll terlalu jauh karena cukup berpindah tab sesuai kebutuhan. Selain itu, proses membaca data menjadi lebih cepat karena informasi tersusun per konteks, sehingga beban visual berkurang dan kemungkinan salah input ikut menurun.

### 3. Apakah Tabs bisa digunakan pada Form juga?
Ya, Tabs bisa digunakan pada Form. Dalam Filament, Tabs sering dipakai untuk memecah form kompleks menjadi beberapa kelompok input agar alur pengisian lebih terstruktur. Dengan cara ini, form tetap berada dalam satu halaman, tetapi pengalaman pengguna terasa lebih terarah dibanding menampilkan semua field sekaligus.

### 4. Bagaimana jika tab terlalu banyak?
Jika jumlah tab terlalu banyak, navigasi justru menjadi membingungkan dan tujuan penyederhanaan UI tidak tercapai. Solusinya adalah menggabungkan tab yang mirip, memindahkan bagian opsional ke komponen lain (misalnya collapsible section), atau menggunakan wizard jika alurnya berurutan. Prinsipnya, jumlah tab sebaiknya tetap secukupnya agar mudah dipahami dan cepat diakses.
</details>

---