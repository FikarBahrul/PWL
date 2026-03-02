<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_kategori(kategori_kode, kategori_nama, created_at) values(?, ?, ?)', ['SNK', 'Snack/Makanan Ringan', now()]);
        // return 'Insert data baru berhasil';

        // $row = DB::update('update m_kategori set kategori_nama = ? where kategori_kode = ?', ['Snack', 'SNK']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // $row = DB::delete('delete from m_kategori where kategori_kode = ?', ['SNK']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

        $data = DB::select('select * from m_kategori');
        return view('kategori', ['data' => $data]);
    }
}