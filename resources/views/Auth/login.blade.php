@extends('Layouts.app')
@section('content')
<div class="container d-flex justify-content-center align-items-center py-5" style="min-height: 80vh;">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-5">
                <h3 class="text-center mb-4 fw-bold">ورود به حساب کاربری</h3>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" 
                               class="form-control form-control-lg rounded-3" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" id="password" name="password" 
                               class="form-control form-control-lg rounded-3" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember">
                            <label class="form-check-label" for="remember">مرا به خاطر بسپار</label>
                        </div>
                        {{-- <a href="{{ route('password.request') }}" class="text-decoration-none small">فراموشی رمز؟</a> --}}
                    </div>

                    <button type="submit" class="btn btn-dark btn-lg w-100 rounded-3">ورود</button>
                </form>

                <hr class="my-4">

                <div class="text-center">
                    <p class="mb-0">هنوز حساب کاربری ندارید؟ 
                        <a href="{{ route('register') }}" class="fw-bold text-decoration-none">ثبت نام</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
