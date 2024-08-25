<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if (Auth::guard('user')->check()) {
            // Jika sudah login, arahkan ke dashboard
            return redirect('/dashboard');
        }
        return view('login', [
            'title' => 'Login',
        ]);
    }

    // public function login(Request $req){
    //     $credentials = $req->validate([
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);
        
    //     if (Auth::guard('user')->attempt($credentials)){
    //         $req->session()->regenerate();

    //         return redirect()->intended('dashboard');
    //     }
    //     else{
    //         return back()->with('invalidUser', 'Mohon masukkan data dengan benar');
    //     }

    // }

    public function login(Request $req){
        $credentials = $req->validate([
            'username' => 'required', // Gantikan 'username' dengan 'identifier' jika lebih umum
            'password' => 'required'
        ]);

        // Ambil inputan username yang bisa berupa NIS atau NIP
        $identifier = $credentials['username'];

        // Cari user berdasarkan NIS di tabel students atau NIP di tabel teachers
        $user = null;

        // Cek apakah identifier ini ada di tabel siswa
        $student = \App\Models\Student::where('nis', $identifier)->first();
        if ($student) {
            $user = $student->user; // Ambil user yang terkait dengan student
        } 
        else {
            // Jika tidak ada di siswa, cek di tabel guru
            $teacher = \App\Models\Teacher::where('nip', $identifier)->first();
            if ($teacher) {
                $user = $teacher->user; // Ambil user yang terkait dengan teacher
            }
        }

        // Jika user ditemukan, lakukan autentikasi manual
        if ($user && Auth::guard('user')->attempt(['username' => $user->username, 'password' => $credentials['password']])) {
            $req->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        } else {
            // Jika autentikasi gagal
            return back()->with('invalidUser', 'Mohon masukkan data dengan benar');
        }
    }


    public function logOut(Request $req){
        // Auth::guard('admin')->logout();
        //$request dan request() itu sama aja 
        $req->session()->invalidate();
    
        $req->session()->regenerateToken();
    
        return redirect(route('Halaman Login'));
    }
}