<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ===== REGISTER =====
    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:6'
        ]);

        DB::table('users')->insert([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login');
    }

    // ===== LOGIN =====
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {

            session([
                'user_id' => $user->id,
                'user_name' => $user->name,
                'user_email' => $user->email
            ]);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }

    // ===== DASHBOARD =====
    public function dashboard()
    {
        if (!session()->has('user_id')) {
            return redirect('/login');
        }

        $users = DB::table('users')->get(); // ambil semua data

        return view('dashboard', compact('users')); // kirim ke view
    }

    // ===== LOGOUT =====
    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
