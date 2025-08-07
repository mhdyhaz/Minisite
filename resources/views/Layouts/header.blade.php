<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css" rel="stylesheet" />
  <style>
    /* تنظیم فونت کل صفحه */
    body {
      margin: 0;
      font-family: 'Vazirmatn', sans-serif;
      direction: rtl;
    }

    header {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 650px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 30px;
      color: white;
      z-index: 1000;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.3);
      /* افکت موج‌دار روشن-تیره */
      background: linear-gradient(-45deg,#27160e, #231f1d, #796243, #412c22);
      background-size: 400% 400%;
      animation: waveBackground 10s ease-in-out infinite;
    }

    @keyframes waveBackground {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }


    .logo {
      font-weight: bold;
      font-size: 24px;
      cursor: pointer;
      bottom: 18rem;
      position: relative;
      user-select: none;
    }

    nav ul {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav ul li {
      position: relative;
    }

    nav ul li a {
      text-decoration: none;
      color: white;
      font-weight: 600;
      padding: 8px 0;
      transition: color 0.3s ease;
      position: relative;
      display: inline-block;
      position: relative;
      bottom: 18rem;
    }

    /* خط زیر لینک هنگام هاور */
    nav ul li a::before {
      content: "";
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 100%;
      height: 2px;
      background: whitesmoke;
      border-radius: 5px;
      transform: scaleX(0);
      transform-origin: right;
      transition: transform 0.3s ease;
    }

    nav ul li a:hover::before {
      transform: scaleX(1);
      transform-origin: right;
    }

    nav ul li a:hover {
      color: #f0e6e6;
    }


    .btn-exit {
      background-color: #1c1714;
      color: white;
      border: none;
      border-radius: 30px;
      padding: 10px 11px;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
      position: relative;
      bottom: 18rem;
      transition: background-color 0.3s ease;
    }

    .btn-exit:hover {
      background-color: #392f27;
    }

    main {
      padding-top: 90px;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
    }

    @media (max-width: 768px) {
      nav ul {
        gap: 15px;
      }

      .logo {
        font-size: 20px;
      }

      .btn-exit {
        padding: 6px 14px;
        font-size: 14px;
      }
    }

    @media (max-width: 480px) {
      header {
        flex-wrap: wrap;
        height: auto;
        padding: 10px 20px;
      }

      nav ul {
        width: 100%;
        justify-content: center;
        gap: 10px;
        margin-top: 10px;
      }

      main {
        padding-top: 120px;
      }
    }

    .carousel {
      position: absolute;
      width: 100%;
      height: 300px;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }

    .perfume {
      position: absolute;
      width: 120px;
      height: auto;
      opacity: 0;
      transition: opacity 0.8s ease, transform 0.8s ease;
      transform: scale(0.8);
      border-radius: 50%;
    }

    .perfume.active {
      opacity: 1;
      transform: scale(2.2);
      z-index: 2;
    }
  </style>
</head>

<body>
  <header>
    <div class="logo">عطراگین</div>
    <nav>
      <ul>
        <li><a href="#">صفحه اصلی</a></li>
        <li><a href="#">عطر</a></li>
        <li><a href="#">ادکلن</a></li>
        <li><a href="#">برندها</a></li>
        <li><a href="#">فروشگاه</a></li>
        <li><a href="#">درباره ما</a></li>
      </ul>
    </nav>
    <button class="btn-exit" type="button">
      <i class="bi bi-person-lines-fill"></i>
    </button>
    <div class="carousel">
      <img src="/images/per-removebg-preview.png" alt="عطر 1" class="perfume">
      <img src="/images/UVrRDgLOTB6aHvLHzoLaQw-removebg-preview.png" alt="عطر 2" class="perfume">
      <img
        src="/images/shalimar-gardens-lahore-perfume-guerlain-note-perfume-free-download-png-500x434-removebg-preview.png"
        alt="عطر 3" class="perfume">
    </div>

  </header>

  <script>
    const perfumes = document.querySelectorAll('.perfume');
    let current = 0;

    function showNextPerfume() {
      perfumes.forEach(p => p.classList.remove('active'));

      perfumes[current].classList.add('active');

      current = (current + 1) % perfumes.length;
    }

    showNextPerfume();

    setInterval(showNextPerfume, 4000);
  </script>

</body>

</html>