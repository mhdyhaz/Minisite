<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected  $userService,$authService;

    public function __construct(UserService $userService,AuthService $authService)
    {
        $this->userService = $userService;
        $this->authService = $authService;
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
        $inputs = $request->only('email','phone','password');
    
        if ($this->authService->login($inputs)) {
            return redirect()->route('home')->with('success', 'ورود موفقیت‌آمیز بود ');
        }

        return back()->withErrors([
            'login' => 'اطلاعات واردشده نادرست است!',
        ])->withInput();
    }


    public function logout()
    {
        $this->authService->logout();
        return redirect()->route('login.form')->with('success', 'با موفقیت خارج شدید ');
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
