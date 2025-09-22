@extends('Layouts.app')
@section('content')
<div class="container d-flex justify-content-center align-items-center py-5" style="min-height: 80vh;">
    <div class="col-md-6 col-lg-5">
        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-5">
                <h3 class="text-center mb-4 fw-bold">ثبت نام در حساب کاربری</h3>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">نام کامل</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" 
                               class="form-control form-control-lg rounded-3" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" 
                               class="form-control form-control-lg rounded-3" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" id="password" name="password" 
                               class="form-control form-control-lg rounded-3" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">تایید رمز عبور</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" 
                               class="form-control form-control-lg rounded-3" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label class="form-check-label" for="terms">
                            قبول قوانین و شرایط سایت
                        </label>
                    </div>

                    <button type="submit" class="btn btn-dark btn-lg w-100 rounded-3">ثبت نام</button>
                </form>

                <hr class="my-4">

                <div class="text-center">
                    <p class="mb-0">قبلا حساب کاربری ساخته‌اید؟ 
                        <a href="{{ route('login') }}" class="fw-bold text-decoration-none">ورود</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
