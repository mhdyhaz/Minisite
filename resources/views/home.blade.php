@extends('Layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert-box alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- اسلایدر بالای صفحه --}}
<div class="perfume-carousel">
    <img src="/images/vi-removebg-preview.png" alt="عطر 1" class="perfume-item">
    <img src="/images/UVrRDgLOTB6aHvLHzoLaQw-removebg-preview.png" alt="عطر 2" class="perfume-item">
    <img src="/images/gh-removebg-preview.png" alt="عطر 3" class="perfume-item">
</div>

{{-- بخش محصولات --}}
<div class="container py-5">

    @php
        $sections = [
            'مناسب‌ترین عطر فصل' => [
                ['img' => 'images/perfume1.jpg', 'title' => 'نام عطر', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/perfume2.jpg', 'title' => 'نام عطر دوم', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
            'بهترین‌های عطراگین' => [
                ['img' => 'images/perfume1.jpg', 'title' => 'نام عطر', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/perfume2.jpg', 'title' => 'نام عطر دوم', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
            'محبوب‌ترین‌های عطراگین' => [
                ['img' => 'images/perfume1.jpg', 'title' => 'نام عطر', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/perfume2.jpg', 'title' => 'نام عطر دوم', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
            'بهترین‌های هر برند' => [
                ['img' => 'images/perfume1.jpg', 'title' => 'نام عطر', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/perfume2.jpg', 'title' => 'نام عطر دوم', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
            'برندها' => [
                ['img' => 'images/perfume1.jpg', 'title' => 'نام برند', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/perfume2.jpg', 'title' => 'نام برند دوم', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
        ];
    @endphp

    @foreach ($sections as $title => $products)
        <div class="text-center mb-4">
            <h2 class="fw-bold">{{ $title }}</h2>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            @foreach ($products as $product)
                <div class="col-md-3 col-sm-6">
                    <a href="{{ $product['url'] }}" class="text-decoration-none text-dark">
                        <div class="card product-card h-100 shadow-sm">
                            <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ $product['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['title'] }}</h5>
                                <p class="card-text text-muted">{{ $product['desc'] }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach

</div>
@endsection

@push('styles')
<style>
    .alert-box {
        text-align: left;
        width: 31rem;
        position: relative;
        left: 61px;
    }

    .perfume-carousel {
        margin-top: 160px;
        width: 100%;
        height: 280px;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        background-color: #b8b49c;
        background-size: 400% 400%;
        animation: waveBackground 10s ease-in-out infinite;
    }

    .perfume-item {
        position: absolute;
        width: 120px;
        height: auto;
        opacity: 0;
        transition: opacity 0.8s ease, transform 0.8s ease;
        transform: scale(0.8);
    }

    .perfume-item.active {
        opacity: 1;
        transform: scale(3);
        z-index: 2;
    }

    .product-card img {
        height: 250px;
        object-fit: cover;
        border-radius: 0.5rem 0.5rem 0 0;
    }

    .product-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 0.5rem;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const perfumes = document.querySelectorAll('.perfume-item');
        let current = 0;

        function showNextPerfume() {
            perfumes.forEach(p => p.classList.remove('active'));
            perfumes[current].classList.add('active');
            current = (current + 1) % perfumes.length;
        }

        showNextPerfume();
        setInterval(showNextPerfume, 4000);
    });
</script>
@endpush
