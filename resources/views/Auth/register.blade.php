@extends('Layouts.app')

@section('content')
    <div class="auth-background">
        <div class="container d-flex justify-content-center align-items-center py-5">
            <div class="col-11 col-sm-10 col-md-7 col-lg-5 col-xl-4">
                <div class="card glass-card border-0 rounded-4">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-3 fw-bold">ثبت نام</h3>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-3" dir="rtl">
                                <label for="name" class="form-label">نام کامل</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="form-control form-control-sm form-control-md" required>
                            </div>

                            <div class="mb-3" dir="rtl">
                                <label for="email" class="form-label">ایمیل یا شماره موبایل</label>
                                <input type="text" id="email" name="email" value="{{ old('email') }}"
                                    class="form-control form-control-sm" required>
                            </div>

                            <div class="mb-3" dir="rtl">
                                <label for="password" class="form-label">رمز عبور</label>
                                <div class="input-group">
                                    <input type="password" id="password" name="password" class="form-control form-control-sm" required>
                                    <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                                        <i class="fa-regular fa-eye-slash"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3" dir="rtl">
                                <label for="password_confirmation" class="form-label">تایید رمز عبور</label>
                                <div class="input-group">
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-control form-control-sm" required>
                                    <span class="input-group-text" id="togglePasswordConfirm" style="cursor: pointer;">
                                        <i class="fa-regular fa-eye-slash"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-3 form-check" dir="rtl">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms" style="color: rgb(252, 251, 251)">
                                    قبول قوانین و شرایط سایت
                                </label>
                            </div>

                            <button type="submit" class="btn btn-outline-custom btn-lg w-100 rounded-3 p-2">ثبت نام</button>
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
    </div>

    <script>
        function toggleEye(inputId, toggleId) {
            const input = document.getElementById(inputId);
            const toggle = document.getElementById(toggleId).querySelector('i');

            document.getElementById(toggleId).addEventListener('click', () => {
                if (input.type === 'password') {
                    input.type = 'text';
                    toggle.classList.remove('fa-eye-slash');
                    toggle.classList.add('fa-eye');
                } else {
                    input.type = 'password';
                    toggle.classList.remove('fa-eye');
                    toggle.classList.add('fa-eye-slash');
                }
            });
        }
        toggleEye('password', 'togglePassword');
        toggleEye('password_confirmation', 'togglePasswordConfirm');
    </script>

    <style>
        .form-control:focus {
            outline: none;
            box-shadow: none;
        }

        .form-label {
            color: white;
        }

        .text-center {
            color: wheat;
        }


        .input-group-text {
            background: none;
        }

        .input-group-text i {
            font-size: 1.1rem;
            color: wheat;
        }

        .form-check-input:checked {
            background-color: rgb(37, 25, 2);
            border-color: wheat;
        }

        .form-check-input {
            background-color: transparent;
            border-color: rgb(255, 255, 255);
        }


        .text-decoration-none {
            color: white;
        }

        .auth-background {
            position: relative;
            min-height: 100vh;
            background: url('/images/a-luxurious-perfume.jpeg') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Vazirmatn', sans-serif;
        }

        .auth-background::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 0;
        }

        .auth-background::after {
            content: "هرپیس، خاطره‌ای از تو می‌سازد";
            position: absolute;
            bottom: 170px;
            right: 40px;
            font-size: 22px;
            font-weight: bold;
            text-shadow: 0 3px 8px rgba(0, 0, 0, 0.8);
            z-index: 1;
            font-family: 'Vazirmatn', sans-serif;
            background: linear-gradient(90deg, #ccc17a, #b3ac58, #8f7f39, #1b1802);
            background-size: 300% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: animate 4s linear infinite;
        }

        @keyframes animate {
            0% {
                background-position: 0% 0%;
            }

            100% {
                background-position: -300% 0%;
            }
        }

        .auth-background .container {
            position: relative;
            z-index: 2;
        }

        .glass-card {
            background: rgba(205, 205, 205, 0.05);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            max-width: 420px;
            margin: auto;
        }

        @media (max-width: 576px) {
            .glass-card {
                padding: 1.2rem;
                max-width: 95%;
            }

            .auth-background::after {
                font-size: 16px;
                bottom: 120px;
                right: 20px;
            }
        }
    </style>
@endsection
