<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::where('level_id', 2)->count();
        return view('user', ['data' => $user]);
    }
}