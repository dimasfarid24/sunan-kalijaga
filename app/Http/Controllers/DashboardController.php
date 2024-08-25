<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::guard('user')->user();
        $nama = 'Nama tidak ditemukan!';
        if($user->type === 'guru' && $user->teacher){
            $nama = $user->teacher->first()->nama;
        }
        else if($user->type === 'siswa' && $user->student){
            $nama = $user->student->first()->nama;
        }
        return view('dashboard', [ 'nama' => $nama]);
    }
}
