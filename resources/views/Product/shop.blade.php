@extends('Layouts.app')

@section('content')
    <div class="container py-5" style="margin-top: 140px;">
        <div class="text-center mb-5">
            <h1 class="fw-bold">فروشگاه عطراگین</h1>
            <p class="text-muted">همه محصولات ما در یک نگاه</p>
        </div>

        <div class="row g-4">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="{{ route('Product.shop', $product->id) }}" class="text-decoration-none">
                        <div class="card product-card h-100 shadow-sm">
                            <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-muted mb-2">{{ number_format($product->price) }} تومان</p>
                                <button class="btn btn-outline-light btn-sm">جزئیات</button>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('styles')
    <style>
        body {
            background-color: #e9ddc6 !important;
        }

        .product-card {
            background-color: #1A1A1A !important;
            border: none;
            border-radius: 1rem;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
        }

        .product-card img {
            height: 250px;
            object-fit: cover;
            border-radius: 1rem 1rem 0 0;
        }

        .product-card .card-body {
            color: #fff;
        }

        .product-card h5 {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-card .btn {
            border-radius: 30px;
        }

        @media (max-width: 768px) {
            .product-card img {
                height: 200px;
            }
        }

        @media (max-width: 576px) {
            .product-card img {
                height: 180px;
            }
        }
    </style>
@endpush