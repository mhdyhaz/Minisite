@extends('Layouts.app')

@section('content')
    <div class="container py-5 " style="margin-top: 140px;">
        <div class="text-center mb-5">
            <h1 class="fw-bold"> ادکلن وعطر های عطراگین</h1>
            <p class="text-muted">همه محصولات عطراگین در یک نگاه</p>
        </div>

        <div class="row g-4" dir="rtl">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product-card shadow-sm">
                        <div class="img-box">
                            <img src="{{ asset('images/best.jpg') }}" alt="test product" class="img-fluid">
                        </div>
                        {{-- لایه اول --}}
                        <div class="overlay"></div>
                        {{-- لایه دوم --}}
                        <div class="overlay-content text-center">
                            <h5 class="fw-bold mb-2">{{ $product->name }}</h5>
                            <p class="mb-3">{{ number_format($product->price) }} تومان</p>
                            <a href="{{ route('Product.shop', $product->id) }}" class="btn-outline-custom btn-sm rounded-3 p-2">جزئیات</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product-card shadow-sm">
                        <div class="img-box">
                            <img src="{{ asset('images/best.jpg') }}" alt="product {{ $i }}" class="img-fluid">
                        </div>
                        <div class="overlay"></div>
                        <div class="overlay-content text-center">
                            <h5 class="fw-bold mb-2">محصول شماره {{ $i }}</h5>
                            <p class="mb-3">{{ number_format(100000 * $i) }} تومان</p>
                            <a href="#" class="btn-outline-custom btn-sm rounded-3 p-2">جزئیات</a>
                        </div>
                    </div>
                </div>
            @endfor
            @for ($i = 1; $i <= 8; $i++)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="product-card shadow-sm">
                    <div class="img-box">
                        <img src="{{ asset('images/best.jpg') }}" alt="product {{ $i }}" class="img-fluid">
                    </div>
                    <div class="overlay"></div>
                    <div class="overlay-content text-center">
                        <h5 class="fw-bold mb-2">محصول شماره {{ $i }}</h5>
                        <p class="mb-3">{{ number_format(100000 * $i) }} تومان</p>
                        <a href="#" class="btn-outline-custom btn-sm rounded-3 p-2">جزئیات</a>
                    </div>
                </div>
            </div>
        @endfor
        </div>
    </div>
@endsection

@push('styles')
    <style>
        body {
            background-color: #e9ddc6 !important;
            font-family: 'Vazirmatn', sans-serif;
        }

        .product-card {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            cursor: pointer;
            background: #1A1A1A;
            height: 350px;
        }

        .product-card .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .overlay-content h5 {
            color: wheat;
            font-size: 1.1rem;

        }


        /*  لایه اول که میاد */
        .overlay {
            position: absolute;
            inset: 0;
            background: wheat;
            transform: translateX(100%);
            transition: transform 0.6s ease;
        }

        /* لایه دوم (اطلاعات) */
        .overlay-content {
            position: absolute;
            inset: 0;
            background: #1A1A1A;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            transform: translateX(100%);
            opacity: 0;
            transition: transform 0.6s ease 0.2s, opacity 0.6s ease 0.2s;
        }
      

        .product-card:hover .img-box img {
            transform: scale(1.1);
            filter: blur(2px);
        }

        .product-card:hover .overlay {
            transform: translateX(0);
        }

        .product-card:hover .overlay-content {
            transform: translateX(0);
            opacity: 1;
        }

        .overlay-content p {
            font-size: 0.95rem;
        }

        .overlay-content .btn {
            border-radius: 25px;
        }
    </style>
@endpush