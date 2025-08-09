@extends('Layouts.app')

@section('content')
    {{-- نمایش خطاها --}}
    @if ($errors->any())
        <div class="alert-box alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {{-- اسلایدر عطر --}}
    <div class="perfume-carousel">
        <img src="/images/vi-removebg-preview.png" alt="عطر 1" class="perfume-item">
        <img src="/images/UVrRDgLOTB6aHvLHzoLaQw-removebg-preview.png" alt="عطر 2" class="perfume-item">
        <img src="/images/gh-removebg-preview.png" alt="عطر 3" class="perfume-item">
    </div>
    <div style="padding: 30px; max-width: 800px; margin: auto;">
        <h2>درباره عطرها</h2>
        <p>
            عطرها از ترکیب اسانس‌های معطر و الکل ساخته می‌شوند و می‌توانند حس و حال خاصی را به مخاطب منتقل کنند.
            رایحه‌ها به سه بخش نت‌های ابتدایی، میانی و پایانی تقسیم می‌شوند که هر کدام ویژگی خاص خود را دارند.
        </p>
        <p>
            انتخاب یک عطر مناسب، به فصل، موقعیت و حتی شخصیت فرد بستگی دارد. به همین دلیل، دنیای عطر تنوع بسیار بالایی دارد.
            از رایحه‌های شیرین و میوه‌ای گرفته تا بوهای تلخ و چوبی، هر کدام برای سلیقه‌ای خاص مناسب هستند.
        </p>
        <p>
            نگهداری صحیح از عطر، عمر و کیفیت رایحه آن را حفظ می‌کند. بهتر است عطرها را دور از نور مستقیم و گرما قرار دهید.
            عطر را روی نقاط نبض مثل مچ دست یا پشت گوش بزنید تا ماندگاری بیشتری داشته باشد.
        </p>
    </div>
    <div style="padding: 30px; max-width: 800px; margin: auto;">
        <h2>درباره عطرها</h2>
        <p>
            عطرها از ترکیب اسانس‌های معطر و الکل ساخته می‌شوند و می‌توانند حس و حال خاصی را به مخاطب منتقل کنند.
            رایحه‌ها به سه بخش نت‌های ابتدایی، میانی و پایانی تقسیم می‌شوند که هر کدام ویژگی خاص خود را دارند.
        </p>
        <p>
            انتخاب یک عطر مناسب، به فصل، موقعیت و حتی شخصیت فرد بستگی دارد. به همین دلیل، دنیای عطر تنوع بسیار بالایی دارد.
            از رایحه‌های شیرین و میوه‌ای گرفته تا بوهای تلخ و چوبی، هر کدام برای سلیقه‌ای خاص مناسب هستند.
        </p>
        <p>
            نگهداری صحیح از عطر، عمر و کیفیت رایحه آن را حفظ می‌کند. بهتر است عطرها را دور از نور مستقیم و گرما قرار دهید.
            عطر را روی نقاط نبض مثل مچ دست یا پشت گوش بزنید تا ماندگاری بیشتری داشته باشد.
        </p>
    </div>
    <div style="padding: 30px; max-width: 800px; margin: auto;">
        <h2>درباره عطرها</h2>
        <p>
            عطرها از ترکیب اسانس‌های معطر و الکل ساخته می‌شوند و می‌توانند حس و حال خاصی را به مخاطب منتقل کنند.
            رایحه‌ها به سه بخش نت‌های ابتدایی، میانی و پایانی تقسیم می‌شوند که هر کدام ویژگی خاص خود را دارند.
        </p>
        <p>
            انتخاب یک عطر مناسب، به فصل، موقعیت و حتی شخصیت فرد بستگی دارد. به همین دلیل، دنیای عطر تنوع بسیار بالایی دارد.
            از رایحه‌های شیرین و میوه‌ای گرفته تا بوهای تلخ و چوبی، هر کدام برای سلیقه‌ای خاص مناسب هستند.
        </p>
        <p>
            نگهداری صحیح از عطر، عمر و کیفیت رایحه آن را حفظ می‌کند. بهتر است عطرها را دور از نور مستقیم و گرما قرار دهید.
            عطر را روی نقاط نبض مثل مچ دست یا پشت گوش بزنید تا ماندگاری بیشتری داشته باشد.
        </p>
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
            margin-top: 130px;
            width: 100%;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-color: #b8b49c;
            background-size: 400% 400%;
            animation: waveBackground 10s ease-in-out infinite;
            transition: opacity 0.5s ease, height 0.5s ease, margin-top 0.5s ease;
        }

        .perfume-carousel.hidden {
            opacity: 0;
            height: 0;
            margin-top: 0;
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