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