# Laporan Praktikum Pemrograman Web Lanjut

## Identitas Mahasiswa

| Keterangan | Data |
|------------|------|
| **Nama**   | Fikar Bahrul Santoso |
| **NIM**    | 244107020160 |
| **Kelas**  | TI-2F |

---

## Jobsheet 12
<details>
<summary>Detail</summary>

**Membuat ID untuk Posts**
<br><br>

![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_AddedID.png)
![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_AddedID2.png)

<br><br>
<br><br>

**Membuat Tags untuk Posts**
<br><br>

![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_AddedTags.png)
![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_AddedTags2.png)
<br><br>
<br><br>

**Membuat Published untuk Posts**
<br><br>

![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_AddedPublished.png)
![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_AddedPublished2.png)
![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_AddedPublished3.png)
<br><br>
<br><br>

**Menambah Toggle untuk ID**
<br><br>

![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_ModifiedIDwithToggle.png)
![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_ModifiedIDwithToggle2.png)
<br><br>
<br><br>

**Menambah Toggle untuk Tags(tersembunyi secara default)**
<br><br>

![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_ModifiedTagswithToggleHidden.png)
![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_ModifiedTagswithToggleHidden2.png)
<br><br>
<br><br>

**Menambah Toggle untuk semua kolom**
<br><br>

![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_ModifiedAllwithToggle.png)
![Jobsheet-012_Filament](DokumentasiPWL/img/JS12_ModifiedAllwithToggle2.png)
<br><br>
<br><br>

## J. Analisis & Diskusi

### 1. Mengapa toggle column penting pada admin panel?
Toggle column penting karena kebutuhan informasi tiap pengguna admin bisa berbeda. Dengan fitur ini, admin dapat menampilkan hanya kolom yang relevan untuk tugas saat itu sehingga tabel lebih rapi, fokus, dan cepat dibaca. Saat jumlah kolom banyak, toggle juga membantu mengurangi noise visual, mempercepat proses monitoring data, dan meningkatkan kenyamanan penggunaan pada layar yang lebih kecil.

### 2. Apa perbedaan `toggleable()` biasa dengan `isToggledHiddenByDefault`?
`toggleable()` biasa membuat kolom bisa ditampilkan/disembunyikan oleh pengguna, tetapi secara default kolom tetap terlihat saat halaman pertama kali dibuka. Sementara itu, `toggleable(isToggledHiddenByDefault: true)` membuat kolom tetap bisa di-toggle, namun kondisi awalnya disembunyikan. Jadi perbedaannya ada pada state awal kolom: langsung tampil atau tersembunyi dari awal.

### 3. Mengapa preferensi kolom tetap tersimpan?
Preferensi kolom tetap tersimpan karena state tabel disimpan oleh Filament untuk setiap pengguna (umumnya melalui session), sehingga konfigurasi tampilan tidak kembali ke default setiap kali halaman dimuat ulang. Mekanisme ini membuat pengalaman penggunaan lebih personal dan efisien karena pengguna tidak perlu mengatur ulang kolom berulang kali.

### 4. Kapan sebaiknya kolom disembunyikan secara default?
Kolom sebaiknya disembunyikan secara default ketika informasi tersebut bersifat sekunder, jarang dipakai, atau hanya dibutuhkan pada kondisi tertentu. Contohnya seperti slug, metadata teknis, atau detail tambahan yang tidak selalu diperlukan untuk overview harian. Dengan menyembunyikan kolom non-prioritas, tampilan awal menjadi lebih bersih dan pengguna tetap bisa menampilkannya kapan saja jika dibutuhkan.

</details>

---
