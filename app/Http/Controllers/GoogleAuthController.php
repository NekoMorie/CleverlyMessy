<?php

namespace App\Http\Controllers;

use App\Models\Admin; // Ganti User dengan Admin  
use App\Models\Institusi;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    protected function redirectBasedOnRole($user)
    {
        if ($user->role == 'admin') {
            return redirect()->intended('/dashboard');
        } else if ($user->role == 'customer') {
            return redirect()->intended('/user/dashboard');
        }
    }

    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = Admin::where('google_id', $google_user->getId())->first();
            if (!$user) {

                $new_user = Admin::create([
                    'nama' => $google_user->user['name'],
                    'email' => $google_user->getEmail(),
                    'google_photo' => $google_user->getAvatar(),
                    'google_id' => $google_user->getId(),
                    'email_verified_at' => now(),
                    'role' => 'customer',
                    'email_verified_at' => now(),
                    'last_login' => now()
                ]);
                // \dd($new_user);
                Auth::guard('admin')->login($new_user);
                return $this->redirectBasedOnRole($new_user);
            } else {

                Auth::guard('admin')->login($user);
                $user->update(['last_login' => now()]);
                return $this->redirectBasedOnRole($user);
            }
        } catch (\Throwable $th) {
            // \dd($th->getMessage());
            // \dd($th);
            return redirect()->route('login')->withErrors('loginGagal', 'Login dengan Google gagal. Silakan coba lagi.');
        }
    }
}
