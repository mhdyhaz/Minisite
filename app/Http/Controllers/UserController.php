<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected  $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showRegisterForm()
    {
        return view('Auth.register');
    }

    public function register(UserRequest $request)
    {
        try {
            $inputs = $request->validated();
         $this->userService->storeUser($inputs);
          
            return redirect()->route('home')->with('success', 'ثبت‌نام با موفقیت انجام شد ');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'خطا در ثبت‌نام: ' . $e->getMessage());
        }
    }

    public function showLoginForm()
    {
        return view('Auth.login');
    }

    public function login(UserRequest $request)
    {
        $credentials = $request->validated();
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard')->with('success', 'ورود موفقیت‌آمیز بود!');
        }

        return back()->withErrors([
            'email' => 'ایمیل یا رمز عبور اشتباه است.',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'با موفقیت خارج شدید.');
    }

    public function showProfileForm()
    {
        $user = Auth::user();
        return view('Profile.edit', compact('user'));
    }

    public function updateProfile(UserRequest $request)
    {
        $user = Auth::user();
        $this->userService->updateUser($user, $request->validated());

        return redirect()->route('profile.edit')->with('success', 'اطلاعات پروفایل با موفقیت به‌روز شد.');
    }
}
