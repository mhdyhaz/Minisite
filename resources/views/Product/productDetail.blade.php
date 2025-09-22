@extends('Layouts.app')

@section('content')
    <div class="product-detail-bg py-5" style="margin-top:180px;">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-5 order-lg-1 order-2 text-center">
                    <div class="glass-box p-3 rounded-4">
                        <img src="{{ asset('images/best.jpg') }}" class="img-fluid rounded-3 shadow-lg animate-img"
                            alt="{{ $product->name }}">
                    </div>
                </div>

                <div class="col-lg-7 order-lg-2 order-1 ">
                    <div class="glass-box p-4 rounded-3">
                        <h2 class="fw-bold mb-3 text-light">{{ $product->name }}</h2>
                        <div class="rating mb-3 d-flex justify-content-end">
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa-star fa-regular star ms-1" data-value="{{ $i }}"></i>
                            @endfor
                        </div>
                        <h4 class="text-gold mb-3">{{ number_format($product->price) }} تومان</h4>

                        <p class="text-light">{{ $product->description ?? 'توضیحاتی برای این محصول ثبت نشده است.' }}</p>

                        <div class="mt-4 d-flex  gap-2 flex-wrap">
                            <button class="btn-outline-custom  px-4">افزودن به سبد خرید</button>
                            <button class="btn-outline-custom  px-4">افزودن به علاقه‌مندی‌ها</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h3 class="fw-bold text-center text-dark mb-4">محصولات مشابه</h3>

                <div class="d-flex gap-3 overflow-hidden  related-scroll flex-row-reverse rounded-3" id="related-products">
                    @foreach ($relatedProducts as $item)
                        <a href="{{ route('product.productDetail', $item->id) }}" class="text-decoration-none flex-shrink-0"
                            style="width:220px;">
                            <div class="glass-box card h-100 shadow-sm border-3">
                                <img src="{{ asset('images/best.jpg') }}" class="card-img-top rounded-top"
                                    alt="{{ $item->name }}">
                                <div class="card-body text-center">
                                    <h6 class="fw-bold text-light">{{ $item->name }}</h6>
                                    <p class="text-gold fw-bold">{{ number_format($item->price) }} تومان</p>
                                </div>
                            </div>
                        </a>
                    @endforeach

                    @for ($i = 1; $i <= 6; $i++)
                        <a href="#" class="text-decoration-none flex-shrink-0" style="width:220px;">
                            <div class="glass-box card h-100 shadow-sm border-3">
                                <img src="{{ asset('images/best.jpg') }}" class="card-img-top rounded-top"
                                    alt="محصول نمونه {{ $i }}">
                                <div class="card-body text-center">
                                    <h6 class="fw-bold text-light">محصول نمونه {{ $i }}</h6>
                                    <p class="text-gold fw-bold">{{ number_format($i * 100000) }} تومان</p>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .product-detail-bg {
                background: linear-gradient(135deg, #e9dec4, #c7bb9e);
                font-family: 'Vazirmatn', sans-serif;
                direction: rtl;
            }

            .text-gold {
                color: #e0c06f;
            }

            .glass-box {
                background: #1A1A1A;
            }

            .btn-gold {
                background: #e0c06f;
                color: #1A1A1A;
                border: none;
                border-radius: 8px;
                transition: .3s;
            }

            #related-products .glass-box.card {
                background-color:#1A1A1A;
            }

            .star {
                font-size: 1.6rem;
                cursor: pointer;
                color: #ffffff;
                transition: .3s;
            }

            .star.active {
                color: #e0c06f;
                transform: scale(1.2);
            }

            .animate-img {
                transition: .5s;
            }

            .animate-img:hover {
                transform: scale(1.05) rotate(-2deg);
            }
        </style>
    @endpush

    @push('scripts')
        <script>
            document.querySelectorAll('.star').forEach(star => {
                star.addEventListener('click', function () {
                    let val = this.getAttribute('data-value');
                    document.querySelectorAll('.star').forEach(s => {
                        s.classList.remove('active', 'fa-solid');
                        s.classList.add('fa-regular');
                        if (s.getAttribute('data-value') <= val) {
                            s.classList.add('active', 'fa-solid');
                            s.classList.remove('fa-regular');
                        }
                    });
                });
            });

            document.addEventListener("DOMContentLoaded", function () {
                const container = document.getElementById("related-products");
                let scrollSpeed = 1;
                let scrollInterval;

                function startScroll() {
                    scrollInterval = setInterval(() => {
                        container.scrollLeft -= scrollSpeed;
                        if (container.scrollLeft <= 0) container.scrollLeft = container.scrollWidth;
                    }, 20);
                }

                container.addEventListener('mouseenter', () => clearInterval(scrollInterval));
                container.addEventListener('mouseleave', () => startScroll());

                container.scrollLeft = container.scrollWidth;
                startScroll();
            });
        </script>
    @endpush
@endsection