<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required']
        ]);

        $email      = $credentials['email'];
        $password   = $credentials['password'];

        $user = User::where('email', $email)->first();

        if ($user) {
            if ($user->status == 1) {
                if (Auth::attempt($credentials)) {
                    $request->session()->remove('failed_attemts');
                    $request->session()->remove('last_failed_attemt');

                    $user = Auth::user();

                    if($user->role){
                        return redirect()->intended('/dashboard');
                    }

                } else {
                    $failedAttemps = $request->session()->get('failed_attempts', 0);
                    $failedAttemps++;

                    if ($failedAttemps >= 3) {
                        $user->update(['status' => 2]);
                        return redirect()->back()->withErrors(['error' => 'Akun diblokir, silahkan menghubungi admin']);
                    }

                    return redirect()->back()->withErrors(['loginError' => 'Login Gagal!'])->withInput();
                }
            } else {
                return redirect()->back()->withErrors(['error' => 'Akun anda belum diaktifkan! Silahkan menghubungi admin']);
            }

        } else {
            return redirect()->back()->withErrors(['error' => 'Email tidak terdaftar']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
