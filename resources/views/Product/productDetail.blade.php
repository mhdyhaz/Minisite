@extends('Layouts.app')

@section('content')
<div class="container py-5">

    {{-- بخش نمایش محصول اصلی --}}
    <div class="row mb-5">
        <div class="col-md-6 text-center">
            <img src="{{ asset($product->image) }}" class="img-fluid rounded shadow-sm" alt="{{ $product->name }}">
        </div>

        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h2 class="fw-bold mb-3">{{ $product->name }}</h2>
            <h4 class="text-danger mb-3">{{ number_format($product->price) }} تومان</h4>
            <p class="text-muted">{{ $product->description ?? 'توضیحات برای این محصول ثبت نشده.' }}</p>

            <div class="mt-4">
                <button class="btn btn-dark btn-lg px-4 me-2">افزودن به سبد خرید</button>
                <button class="btn btn-outline-secondary btn-lg px-4">افزودن به علاقه‌مندی‌ها</button>
            </div>
        </div>
    </div>

    {{-- محصولات مشابه --}}
    <div class="mt-5">
        <h3 class="fw-bold text-center mb-4">محصولات مشابه</h3>
        <div class="row g-4">
            @forelse ($relatedProducts as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <a href="{{ route('product.productDetail', $item->id) }}" class="text-decoration-none">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="text-danger fw-bold">{{ number_format($item->price) }} تومان</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <p class="text-center text-muted">هیچ محصول مشابهی یافت نشد.</p>
            @endforelse
        </div>
    </div>

</div>
@endsection
