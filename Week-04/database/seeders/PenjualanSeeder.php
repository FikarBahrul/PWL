<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan')->delete();
        
        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Budi Santoso', 'penjualan_kode' => 'PJL001', 'penjualan_tanggal' => '2024-01-20 10:00:00'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Ani Wijaya', 'penjualan_kode' => 'PJL002', 'penjualan_tanggal' => '2024-01-20 11:30:00'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Citra Dewi', 'penjualan_kode' => 'PJL003', 'penjualan_tanggal' => '2024-01-20 13:45:00'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Doni Prasetyo', 'penjualan_kode' => 'PJL004', 'penjualan_tanggal' => '2024-01-21 09:15:00'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Eka Putri', 'penjualan_kode' => 'PJL005', 'penjualan_tanggal' => '2024-01-21 10:30:00'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Fajar Sidik', 'penjualan_kode' => 'PJL006', 'penjualan_tanggal' => '2024-01-21 14:20:00'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Gita Amelia', 'penjualan_kode' => 'PJL007', 'penjualan_tanggal' => '2024-01-22 08:45:00'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Hendra Saputra', 'penjualan_kode' => 'PJL008', 'penjualan_tanggal' => '2024-01-22 11:00:00'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Indah Sari', 'penjualan_kode' => 'PJL009', 'penjualan_tanggal' => '2024-01-22 15:30:00'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Joko Widodo', 'penjualan_kode' => 'PJL010', 'penjualan_tanggal' => '2024-01-23 09:00:00'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
