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

    <div class="perfume-hero">

        <div class="perfume-carousel">
            <img src="/images/UVrRDgLOTB6aHvLHzoLaQw-removebg-preview.png" alt="عطر 2" class="perfume-item">
            <img src="/images/gh-removebg-preview.png" alt="عطر 3" class="perfume-item">
        </div>

        <div class="hero-slogan">
            <h1>عطر خاص خود را فقط در عطراگین بیابید</h1>
            <p>با انتخابی متفاوت، جذابیت واقعی رو تجربه کن</p>
        </div>
    </div>

    <div class="container py-5">

        @php
            $sections = [
                'مناسب‌ترین عطر فصل' => [
                    ['img' => 'images/summer.webp', 'title' => 'blue عطر', 'url' => 'product-page.html'],
                    ['img' => 'images/summer2.jpg', 'title' => 'summerعطر ', 'url' => 'product-page2.html'],
                ],
                'عطرهای مردانه و زنانه' => [
                    ['img' => 'images/men.jpg', 'title' => 'men عطر', 'url' => 'product-page.html'],
                    ['img' => 'images/women.jpg', 'title' => 'womenعطر ', 'url' => 'product-page2.html'],
                ],
                'بهترین‌های عطراگین' => [
                    ['img' => 'images/rain.webp', 'title' => 'coco عطر', 'url' => 'product-page.html'],
                    ['img' => 'images/flower.jpg', 'title' => 'lamoyrعطر ', 'url' => 'product-page2.html'],
                ],
                'محبوب‌ترین‌های عطراگین' => [
                    ['img' => 'images/best2.jpg', 'title' => 'black عطر', 'url' => 'product-page.html'],
                    ['img' => 'images/best.jpg', 'title' => 'cociعطر ', 'url' => 'product-page2.html'],
                ],
                'بهترین‌های هر برند' => [
                    ['img' => 'images/syl.webp', 'title' => 'syls عطر', 'url' => 'product-page.html'],
                    ['img' => 'images/chanel.jpg', 'title' => 'chanelعطر ', 'url' => 'product-page2.html'],
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
                            <div class="card product-card h-100 shadow-sm rounded-3">
                                <div class="img-box">
                                    <img src="{{ $product['img'] }}" class="card-img-top" alt="{{ $product['title'] }}">

                                </div>
                                <div class="card-body">
                                    <h5 class="card-title ">{{ $product['title'] }}</h5>
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
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Tajawal:wght@400;700&display=swap');

        :root {
            --accent-gold: #ffcc70;
            --accent-white: #fefefe;
        }



        .perfume-hero {
            width: 100%;
            height: 100vh;
            min-height: 600px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5% 7%;
            background: #1a1a1a;
            overflow: hidden;
        }

        .hero-slogan {
            flex: 1;
            max-width: 45%;
            text-align: right;
            opacity: 0;
            transform: translateX(-50px);
            animation: sloganEnter 1.6s ease forwards 0.5s;
        }

        .hero-slogan h1 {
            font-family: 'Playfair Display', serif;
            font-size: 3.8rem;
            font-weight: 900;
            line-height: 1.3;
            background: linear-gradient(90deg, var(--accent-gold), var(--accent-white) 70%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-top: 100px;
        }

        .hero-slogan p {
            margin-top: 18px;
            font-size: 1.25rem;
            color: rgba(255, 255, 255, 0.85);
        }

        @keyframes sloganEnter {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .perfume-item {
            position: absolute;
            left: 10%;
            bottom: 15%;
            width: 360px;
            height: auto;
            opacity: 0;
            transform: translateY(200px) rotate(20deg) scale(0.7);
            transition: opacity 1s ease, transform 1.2s ease;
            z-index: 2;
        }

        .perfume-item.active {
            opacity: 1;
            transform: translateY(0) rotate(0deg) scale(1.5);
            filter: drop-shadow(0 30px 80px rgba(0, 0, 0, 0.9));
            animation: perfumeGlow 3s ease-in-out infinite;
        }

        @keyframes perfumeGlow {

            0%,
            100% {
                filter: drop-shadow(0 25px 60px rgba(0, 0, 0, 0.7));
            }

            50% {
                filter: drop-shadow(0 40px 100px rgba(0, 0, 0, 0.95));
            }
        }

        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            object-position: center;
            border-radius: 1rem 1rem 0 0;
            transform: scale(1.1);
        }

        .product-card {
            border: none;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            overflow: hidden;
        }

        .product-card .card-body {
            background-color: #1A1A1A;
            color: wheat;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }

        @media (max-width: 992px) {
            .perfume-hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-slogan {
                max-width: 100%;
                text-align: center;
            }

            .perfume-item {
                width: 220px;
                right: auto;
                bottom: 0;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const perfumes = document.querySelectorAll('.perfume-item');
            let current = 0;

            if (!perfumes || perfumes.length === 0) return;

            function showNextPerfume() {
                perfumes.forEach(p => p.classList.remove('active'));
                perfumes[current].classList.add('active');
                current = (current + 1) % perfumes.length;
            }

            showNextPerfume();
            setInterval(showNextPerfume, 4500);
        });
    </script>
@endpush