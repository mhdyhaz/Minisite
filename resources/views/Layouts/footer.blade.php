<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'عطراگین')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/kalameh-font@v1.0.0/dist/font-face.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">


    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }


        footer {
            background: linear-gradient(135deg, #d9d5c3, #b8b49c);
            color: #2c2c2c;
            margin-top: auto;
            min-height: 22rem;
            padding: 2rem 1rem;
            position: relative;
        }

        .footer-top {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: flex-start;
            /* یا center برای وسط عمودی */
            padding-top: 6px;
        }

        .image {
            width: 19rem;
            height: 19rem;
            position: relative;
            left: 75px;
            top: 20px;
        }

        .footer-top a {
            color: inherit;
            text-decoration: none;
            margin: 0 10px;
            font-weight: 500;
            display: inline-block;


        }

        .footer-top a:hover {
            transform: scale(1.15);
            transition: transform 0.3s ease;

        }

        .footer-about {
            position: absolute;
            bottom: 20rem;
            right: 41rem;
            text-align: right;
            padding-top: 0.5rem;
            font-size: 0.85rem;
            color: #555;
            max-width: 250px;
            text-shadow: 0 0 2px rgba(0,0,0,0.15);
            line-height: 1.6;
        }


        .social a {
            font-size: 24px;
            margin: 0 5px;
            transition: transform 0.3s ease;
        }

        .social a:hover {
            transform: scale(1.2);
        }

        .signature {
            text-align: left;
        }

        .sign-text {
            font-family: 'Great Vibes', cursive;
            font-size: 2.5rem;
            color: #333;
            position: absolute;
            left: 2rem;
        }

        .email-text {
            font-family: Arial, sans-serif;
            font-size: 0.7rem;
            color: #555;
            position: absolute;
            padding-top: 2.5rem;
            left: 2rem;
        }
    </style>

    @stack('styles')
</head>

<body>

    <footer>
        <div class="footer-top">

            <div class="links">
                <a href="/about">درباره ما</a>
                <a href="/shop">فروشگاه</a>
                <a href="/contact">تماس با ما</a>
            </div>
            <img src="/images/professional-logo-for-a-perfume-website-_-50cP1W8Q1q3E8Ual7iWYw_IkfZeZltQCuTtgGuz1U3Sg-removebg-preview.png"
                alt="لوگوی عطراگین" class="image">

            <div class="social">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-telegram"></i></a>
            </div>
            <div class="footer-about">
                <p>
                    بوی خوب شما، فقط با عطر ما.
                    فقط با یک پیس از عطراگین،در ذهن ها ماندگار شوید
                </p>
            </div>


        </div>

        <div class="Signature">
            <div class="sign-text">Az</div>
            <div class="email-text">azcode.builds@gmail.com</div>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>