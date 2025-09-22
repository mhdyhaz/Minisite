@extends('Layouts.app')

@section('content')
<div class="container py-5">

    <h2 class="fw-bold mb-4 text-center">سبد خرید شما</h2>

    @if (count($cart) > 0)
        <div class="table-responsive">
            <table class="table table-dark table-striped align-middle text-center">
                <thead>
                    <tr>
                        <th>تصویر</th>
                        <th>نام محصول</th>
                        <th style="width: 200px;">تعداد</th>
                        <th>قیمت واحد</th>
                        <th>جمع کل</th>
                        <th>حذف</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @foreach ($cart as $id => $item)
                        @php $total += $item['price'] * $item['quantity']; @endphp
                        <tr>
                            <td>
                                <img src="{{ asset($item['image']) }}" width="70" class="rounded">
                            </td>
                            <td>{{ $item['name'] }}</td>
                            <td>
                                <form action="{{ route('cart.update', $id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group input-group-sm">
                                        <input type="number" name="quantity" value="{{ $item['quantity'] }}" min="1" class="form-control">
                                        <button class="btn btn-primary">✔</button>
                                    </div>
                                </form>
                            </td>
                            <td>{{ number_format($item['price']) }} تومان</td>
                            <td>{{ number_format($item['price'] * $item['quantity']) }} تومان</td>
                            <td>
                                <form action="{{ route('cart.remove', $id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">✖</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-end mt-4">
            <h4>مجموع کل: <span class="text-success">{{ number_format($total) }} تومان</span></h4>
            <a href="{{ route('checkout') }}" class="btn btn-lg btn-success mt-3">تسویه حساب</a>
        </div>
    @else
        <div class="d-flex flex-column align-items-center justify-content-center text-center py-5">
            <img src="{{ asset('images/empty-cart.png') }}" alt="سبد خالی" class="mb-3" width="150">
            <h4 class="mb-2">سبد خرید شما خالی است!</h4>
            <p class="text-muted mb-4">برای مشاهده محصولات روی دکمه زیر کلیک کنید.</p>
            <a href="{{ route('Product.products') }}" class="btn btn-lg btn-dark">ادامه خرید</a>
        </div>
    @endif

</div>
@endsection
