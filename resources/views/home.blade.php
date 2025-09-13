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

<div class="perfume-carousel">
    <img src="/images/vi-removebg-preview.png" alt="عطر 1" class="perfume-item">
    <img src="/images/UVrRDgLOTB6aHvLHzoLaQw-removebg-preview.png" alt="عطر 2" class="perfume-item">
    <img src="/images/gh-removebg-preview.png" alt="عطر 3" class="perfume-item">
</div>

<div class="container py-5">

    @php
        $sections = [
            'مناسب‌ترین عطر فصل' => [
                ['img' => 'images/summer.webp', 'title' => 'blue عطر', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/summer2.jpg', 'title' => 'عطر summer', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
            'عطرهای مردانه و زنانه' => [
                ['img' => 'images/men.jpg', 'title' => 'men عطر', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/women.jpg', 'title' => 'عطر women', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
            'بهترین‌های عطراگین' => [
                ['img' => 'images/rain.webp', 'title' => 'coco عطر', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/flower.jpg', 'title' => 'عطر lamoyr', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
            'محبوب‌ترین‌های عطراگین' => [
                ['img' => 'images/best2.jpg', 'title' => 'black عطر', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/best.jpg', 'title' => 'عطر coci', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
            'بهترین‌های هر برند' => [
                ['img' => 'images/syl.webp', 'title' => 'syls عطر', 'desc' => 'توضیح کوتاه', 'url' => 'product-page.html'],
                ['img' => 'images/chanel.jpg', 'title' => 'عطر chanel', 'desc' => 'توضیح کوتاه', 'url' => 'product-page2.html'],
            ],
        ];
    @endphp

    @foreach ($sections as $title => $products)
        <div class="text-center mb-4">
            <h2 class="fw-bold">{{ $title }}</h2>
        </div>

        <div class="row g-4 justify-content-center mb-5">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="{{ route('product.productDetail', 1) }}" class="text-decoration-none">
                        <div class="card product-card h-100 shadow-sm">
                            <img src="{{ asset($product['img']) }}" class="card-img-top" alt="{{ $product['title'] }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product['title'] }}</h5>
                                <p class="card-text">{{ $product['desc'] }}</p>
                            </div>
                        </div>
                    </a>
                    
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach

</div>
@endsection

@push('styles')
<style>
html, body {
    background-color: #e9ddc6 !important;
    color: #E6D5B8;
    margin: 0;
    padding: 0;
}


.alert-box {
    text-align: left;
    width: 90%;
    max-width: 500px;
    margin: 0 auto 20px auto;
}


.perfume-carousel {
    margin-top: 160px;
    width: 100%;
    height: 280px;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    background-color: #1A1A1A;
}

.perfume-item {
    position: absolute;
    width: 120px;
    opacity: 0;
    transition: opacity 0.8s ease, transform 0.8s ease;
    transform: scale(0.8);
}

.perfume-item.active {
    opacity: 1;
    transform: scale(2.5);
    z-index: 2;
}

.product-card {
    background-color: #1A1A1A !important;
    border: none;
    border-radius: 1rem; 
    transition: transform 0.4s ease, box-shadow 0.4s ease;
    overflow: hidden;
}

.product-card:hover {
    transform: scale(1.05); 
    box-shadow: 0 12px 30px rgba(0,0,0,0.4);
}

.product-card img {
    height: 250px;
    width: 100%;
    object-fit: cover;
    border-radius: 1rem 1rem 0 0;
}

.product-card .card-body {
    background-color: #1A1A1A;
    color: #fff;
}

.product-card h5,
.product-card p {
    color: #fff;
    margin: 0;
    text-align: center;
}

@media (max-width: 992px) {
    .product-card img { height: 220px; }
}
@media (max-width: 768px) {
    .product-card img { height: 200px; }
}
@media (max-width: 576px) {
    .product-card img { height: 180px; }
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
