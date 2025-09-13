<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/gh/rastikerdar/kalameh-font@v1.0.0/dist/font-face.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Kalameh', sans-serif;
    }

    header {
      background-color: #1A1A1A;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      padding: 30px 30px 15px 30px;
      z-index: 1000;
      transition: all 0.3s ease;
    }

    header.shrink {
      padding: 8px 15px;
    }

    .logo img {
      height: 140px;
      width: auto;
      transition: transform 0.3s ease;
      position: relative;
      top: -30px;
    }

    .logo img:hover {
      transform: scale(1.05);
    }

    nav ul li a {
      text-decoration: none;
      color: #E6D5B8;
      font-weight: 600;
      margin: 0 10px;
      transition: transform 0.3s ease;
    }

    nav ul li a:hover {
      transform: scale(1.1);
    }

    .navbar-nav .nav-link {
      color: #E6D5B8 !important;
      font-weight: 600;
      font-size: 16px;
      transition: all 0.3s ease;
      position: relative;
      left: 45px;
    }

    /* این برای درست شدن ترتیب منو */
    .navbar-nav {
      display: flex;
      flex-direction: row;
      justify-content: center;
      direction: rtl;
    }

    .navbar-nav .nav-link:hover {
      transform: scale(1.15);
      color: #e6c87c !important;
    }

    .user-icon {
      font-size: 28px;
      color: #E6D5B8;
      transition: transform 0.3s ease;
      position: relative;
    }

    .user-icon:hover {
      transform: scale(1.2);
      filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.4));
    }

    .search-container {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      direction: rtl;
      position: absolute;
      top: 100px;
      left: 50%;
      transform: translateX(-50%);
      width: 40%;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15), 0 0 15px #E6D5B8;
      border-radius: 30px;
      transition: all 0.4s ease;
      background-color: transparent;
    }

    .search-container input {
      padding: 10px 20px 10px 40px;
      width: 100%;
      border-radius: 50px;
      border: none;
      font-family: inherit;
      font-size: 16px;
      background-color: transparent;
      outline: none;
      color: white;
    }

    .search-icon {
      font-size: 20px;
      color: #E6D5B8;
      border: none;
      outline: none;
      background: none;
      position: absolute;
      left: 10px;
      cursor: pointer;
    }


    .search-container.fixed {
      position: fixed;
      top: 15px;
      left: 50%;
      transform: translateX(-50%) scale(0.85);
      width: 30%;
    }

    nav.hidden {
      opacity: 0;
      max-height: 0;
      overflow: hidden;
      transition: all 0.3s ease;
    }


    .header-row {
      align-items: flex-start;
    }

    @media (max-width: 768px) {
      .logo img {
        height: 120px;
      }

      .search-container {
        width: 80%;
        margin-top: 10px;
      }

      .navbar-nav .nav-link {
        top: 0;
      }

      .user-icon {
        top: 0;
      }
    }

    @media (max-width: 480px) {
      .search-container {
        width: 90%;
      }
    }
  </style>
</head>

<body>

  <header>
    <div class="container-fluid">
      <div class="row header-row">

        <div class="col-auto d-flex align-items-center">
          <i class="bi bi-person-lines-fill user-icon"></i>
        </div>

        <div class="col d-flex justify-content-center">
          <nav class="navbar navbar-expand-md p-0">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">صفحه اصلی</a></li>
                <li class="nav-item"><a class="nav-link" href="#">عطر</a></li>
                <li class="nav-item"><a class="nav-link" href="#">ادکلن</a></li>
                <li class="nav-item"><a class="nav-link" href="#">برندها</a></li>
                <li class="nav-item"><a class="nav-link" href="#">فروشگاه</a></li>
                <li class="nav-item"><a class="nav-link" href="#">درباره ما</a></li>
              </ul>
            </div>
          </nav>
        </div>

        <div class="col-auto d-flex justify-content-end align-items-center">
          <div class="logo">
            <img
              src="/images/a-perfume-bottle-logo-with-a-combination_Fn_ApzehRLO3yNdRPjdt2A_Jns8ExupSt2EMvtDntFvLQ-removebg-preview.png"
              alt="لوگوی عطراگین">
          </div>
        </div>

      </div>

      <div class="search-container mt-3" id="searchBar">
        <input type="text" id="searchInput" placeholder="جستجو...">
        <button class="search-icon" id="searchBtn">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </div>
  </header>

  <script>
    const header = document.querySelector("header");
    const searchBar = document.getElementById("searchBar");
    const nav = document.querySelector("nav");
    const threshold = 200;

    window.addEventListener("scroll", () => {
      if (window.scrollY > threshold) {
        header.classList.add("shrink");
        searchBar.classList.add("fixed");
        nav.classList.add("hidden");
      } else {
        header.classList.remove("shrink");
        searchBar.classList.remove("fixed");
        nav.classList.remove("hidden");
      }
    });

    document.getElementById("searchBtn").addEventListener("click", function () {
      const query = document.getElementById("searchInput").value.trim();
      if (query !== "") {
        alert("جستجو برای: " + query);
      } else {
        alert("لطفاً عبارتی برای جستجو وارد کنید.");
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>