@extends('Layouts.app')

@section('content')
    <div class="cart-background">
        <div class="cart-wrapper">
            <div class="card glass-card shadow-lg border-0 rounded-4">
                <div class="card-body p-4 p-md-5">

                    <h3 class="text-center fw-bold mb-4">سبد خرید </h3>

                    @if(empty($cartItems) || count($cartItems) === 0)
                        <div class="text-center py-5">
                            {{-- <img src="/images/empty-cart.png" alt="سبد خالی" class="mb-3 empty-img"> --}}
                            <h5 class="mb-3">سبد خرید شما خالی است</h5>
                            <a href="{{ route('Product.shop') }}" class="btn btn-outline-custom btn-lg">
                                مشاهده محصولات
                            </a>
                        </div>
                    @else
                        @foreach($cartItems as $item)
                            <div class="cart-item d-flex align-items-center justify-content-between mb-3 p-3 rounded-3">
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ $item->image }}" alt="{{ $item->name }}" class="cart-img">
                                    <div>
                                        <h6 class="mb-1 fw-bold">{{ $item->name }}</h6>
                                        <small class="text-muted">{{ $item->variant }}</small>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="input-group input-group-sm">
                                        <button class="btn btn-outline-light">-</button>
                                        <input type="text" class="form-control text-center" value="{{ $item->qty }}" style="width:50px;">
                                        <button class="btn btn-outline-light">+</button>
                                    </div>
                                    <span class="fw-bold">{{ number_format($item->price) }} تومان</span>
                                    <button class="btn btn-sm btn-danger">✕</button>
                                </div>
                            </div>
                        @endforeach

                        <hr>

                        <div class="summary mb-3">
                            <div class="d-flex justify-content-between">
                                <span>جمع جزء:</span>
                                <span>{{ number_format($subtotal) }} تومان</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>هزینه ارسال:</span>
                                <span>{{ number_format($shipping) }} تومان</span>
                            </div>
                            <div class="d-flex justify-content-between fw-bold fs-5 mt-2">
                                <span>جمع کل:</span>
                                <span class="text-warning">{{ number_format($total) }} تومان</span>
                            </div>
                        </div>

                        <div class="d-flex flex-column flex-md-row gap-3">
                            <a href="{{ route('Product.shop') }}" class="btn btn-secondary w-100">ادامه خرید</a>
                            <a href="{{ route('checkout') }}" class="btn btn-outline-custom w-100">ادامه به پرداخت</a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <style>
        .cart-background {
            position: relative;
            min-height: calc(100vh - 70px);
            background: url('/images/a-luxurious-cart-bg.jpg') no-repeat center center;
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Vazirmatn', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .cart-background::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 0;
        }

        .cart-wrapper {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 850px;
            margin: 18rem;
        }

        .glass-card {
            background: rgba(205, 205, 205, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.4);
        }

        .cart-item {
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        .cart-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border-radius: 12px;
        }

        .empty-img {
            width: 150px;
            opacity: 0.8;
        }

        .btn-outline-custom {
            color: wheat;
            border-color: wheat;
            font-weight: bold;
        }

        .btn-outline-custom:hover {
            background-color: wheat;
            color: rgb(37, 25, 2);
        }
    </style>
@endsection
