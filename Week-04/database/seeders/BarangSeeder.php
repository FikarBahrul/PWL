<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->delete();
        
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'MKN001', 'barang_nama' => 'Roti Tawar', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'MKN002', 'barang_nama' => 'Mi Instan', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'MKN003', 'barang_nama' => 'Keripik Kentang', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'MNM001', 'barang_nama' => 'Air Mineral', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'MNM002', 'barang_nama' => 'Teh Kotak', 'harga_beli' => 3500, 'harga_jual' => 5000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'MNM003', 'barang_nama' => 'Kopi Kaleng', 'harga_beli' => 4500, 'harga_jual' => 6000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'ACS001', 'barang_nama' => 'Tas Ransel', 'harga_beli' => 75000, 'harga_jual' => 100000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'ACS002', 'barang_nama' => 'Dompet', 'harga_beli' => 30000, 'harga_jual' => 45000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => 'ELK001', 'barang_nama' => 'Power Bank', 'harga_beli' => 80000, 'harga_jual' => 120000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'ELK002', 'barang_nama' => 'Kabel USB', 'harga_beli' => 15000, 'harga_jual' => 25000],
            ['barang_id' => 11, 'kategori_id' => 5, 'barang_kode' => 'NELK001', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 12, 'kategori_id' => 5, 'barang_kode' => 'NELK002', 'barang_nama' => 'Pulpen', 'harga_beli' => 2000, 'harga_jual' => 3000],
            ['barang_id' => 13, 'kategori_id' => 1, 'barang_kode' => 'MKN004', 'barang_nama' => 'Biskuit', 'harga_beli' => 6000, 'harga_jual' => 8000],
            ['barang_id' => 14, 'kategori_id' => 2, 'barang_kode' => 'MNM004', 'barang_nama' => 'Jus Kemasan', 'harga_beli' => 5500, 'harga_jual' => 7500],
            ['barang_id' => 15, 'kategori_id' => 3, 'barang_kode' => 'ACS003', 'barang_nama' => 'Kacamata', 'harga_beli' => 50000, 'harga_jual' => 75000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
