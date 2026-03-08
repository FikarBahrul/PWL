<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        return view('penjualan');
    }
        public function proses(Request $request)
    {
        $harga = $request->input('harga');
        $qty   = $request->input('qty');
        $total = $harga * $qty;
    
        return view('penjualan', [
            'harga' => $harga,
            'qty'   => $qty,
            'total' => $total,
        ]);
    }
}