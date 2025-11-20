<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthService
{
    // دلیل ساخت این فایل این است ک برای تصمیم گیری اینکه کاربر با ایمیل وارد شده یا شماره و نیاز بع منطق احراز هویت
    public function login(array $inputs)
    {
        $credentials = [];

        if (!empty($inputs['email'])) {
            $credentials['email'] = $inputs['email'];
        } elseif (!empty($inputs['phone'])) {
            $credentials['phone'] = $inputs['phone'];
        }

        $credentials['password'] = $inputs['password'];

        if (Auth::attempt($credentials, isset($inputs['remember']))) {
            session()->regenerate();
            return true;
        }

        return false;
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
    }
}
