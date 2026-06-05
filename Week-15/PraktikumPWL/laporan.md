# Laporan Praktikum Pemrograman Web Lanjut

## Identitas Mahasiswa

| Keterangan | Data |
|------------|------|
| **Nama**   | Fikar Bahrul Santoso |
| **NIM**    | 244107020160 |
| **Kelas**  | TI-2F |

---

## Jobsheet 15
<details>
<summary>Detail</summary>

**Rollback Migration**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_Rollback.png)
![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_CreateJsonTags.png)
<br><br><br><br>

**Membuat Tag Table**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_TagTable.png)
![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_TagTable2.png)
<br><br><br><br>

**Membuat Pivot Table**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_CreateJsonPivotTable.png)
<br><br><br><br>

**Migrate Tag**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_MigrateTag.png)

<br><br><br><br>

**Resource Tag**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_ResoTag.png)
<br><br><br><br>

**Edit Model Tag**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_ModelTag.png)
<br><br><br><br>

**Form Tag**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_FormTag.png)
![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_FormTag2.png)
<br><br><br><br>

**Relationship Model Post & Tag**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_RelationshipModelPost.png)
![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_RelationshipModelPost2.png)
<br><br><br><br>

**Relationship Post Form**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_RelationshipPostForm.png)
<br><br><br><br>

**Hasil Post Form**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_FormPostResult.png)
![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_FormPostResult2.png)
<br><br><br><br>

**Menghubungkan Relationship Manager**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_ConnectRelationshipManager.png)
<br><br><br><br>

**Fitur Relationship Manager**
<br><br>

![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_FeatureRelationshipManager.png)
![Jobsheet-015_Filament](DokumentasiPWL/img/JS15_FeatureRelationshipManager2.png)
<br><br><br><br>

## T. Analisis & Diskusi

### 1. Apa perbedaan HasMany dan Many-to-Many?
`HasMany` (one-to-many) berarti satu entitas memiliki banyak entitas lain dan disimpan dengan foreign key di tabel anak; `Many-to-Many` berarti kedua entitas bisa saling berhubungan banyak-ke-banyak dan membutuhkan tabel pivot untuk menyimpan pasangan relasi.

### 2. Mengapa pivot table diperlukan?
Pivot table menyimpan hubungan many-to-many secara terpisah sehingga menjaga normalisasi, memungkinkan penambahan metadata relasi (mis. timestamps atau atribut pivot), dan mempermudah query/penegakan integritas referensial.

### 3. Apa fungsi attach dan detach pada Filament?
`attach` menambahkan hubungan antara record yang sudah ada (memasukkan baris ke tabel pivot), sedangkan `detach` menghapus hubungan tersebut (menghapus baris pivot). Keduanya bekerja pada relasi many-to-many tanpa membuat atau menghapus model induk.

### 4. Mengapa JSON column kurang baik untuk relasi?
Menyimpan relasi di kolom JSON menghilangkan integritas referensial (tidak ada foreign key), menyulitkan query dan join, kurang efisien untuk indexing dan skala besar, serta menyulitkan update/validasi data relasional.
</details>

---