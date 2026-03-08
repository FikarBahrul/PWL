<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // DB::insert('insert into m_user(level_id, username, nama, password, created_at) values(?, ?, ?, ?, ?)', [1, 'johndoe', 'John Doe', Hash::make('12345'), now()]);
        // return 'Insert data baru berhasil';

        // $row = DB::update('update m_user set nama = ? where username = ?', ['John Doe Updated', 'johndoe']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // $row = DB::delete('delete from m_user where username = ?', ['johndoe']);
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

        $data = DB::select('select m_user.*, m_level.level_nama from m_user inner join m_level on m_user.level_id = m_level.level_id');
        return view('user', ['data' => $data]);
    }
}