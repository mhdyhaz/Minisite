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
      background-color: #b8b49c;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      padding: 30px;
      z-index: 1000;
      transition: all 0.3s ease;
    }

    header.shrink {
      padding: 8px 15px;
    }

    .logo img {
      height: 100px;
      width: auto;
      transition: transform 0.3s ease;
    }

    .logo img:hover {
      transform: scale(1.05);
    }

    nav ul li a {
      text-decoration: none;
      color: #2c2c2c;
      font-weight: 600;
      transition: transform 0.3s ease;
    }

    nav ul li a:hover {
      transform: scale(1.1);
    }

    .user-icon {
      font-size: 28px;
      color: black;
      transition: transform 0.3s ease;
    }

    .user-icon:hover {
      transform: scale(1.2);
      filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.4));
    }



    .search-container input {
      padding: 10px 50px;
      width: 100%;
      border-radius: 50px;
      border: none;
      font-family: inherit;
      font-size: 16px;
      position: relative;
      background-color: transparent;
      outline: none;
    }
    .search-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 100px;
  left: 50%;
  transform: translateX(-50%);
  width: 40%;
  box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
  border-radius: 30px;
  transition: all 0.4s ease;
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

 

    .search-icon {
      font-size: 20px;
      color: black;
      transition: transform 0.2s ease, filter 0.2s ease;
      position: relative;
      border-radius: 50px;
      z-index: 999;
      border: none;
      outline: none;
      left: 10px;
      background: none;
    }



    @media (max-width: 768px) {
      .logo img {
        height: 70px;
      }

      .search-container {
        width: 80%;
        margin-top: 10px;
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
      <div class="row align-items-center">
      
        <div class="col-auto logo">
          <img src="/images/professional-logo-for-a-perfume-website-_-50cP1W8Q1q3E8Ual7iWYw_IkfZeZltQCuTtgGuz1U3Sg-removebg-preview.png"
            alt="لوگوی عطراگین">
        </div>

        <div class="col">
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

        <div class="col-auto">
          <i class="bi bi-person-lines-fill user-icon"></i>
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
const nav = document.querySelector("nav"); // اضافه شد
const threshold = 200;

window.addEventListener("scroll", () => {
  if (window.scrollY > threshold) {
    header.classList.add("shrink");
    searchBar.classList.add("fixed");
    nav.classList.add("hidden"); // منو محو میشه
  } else {
    header.classList.remove("shrink");
    searchBar.classList.remove("fixed");
    nav.classList.remove("hidden"); // منو برمیگرده
  }
});

  </script>

  <script>
    const header = document.querySelector("header");
    const searchBar = document.getElementById("searchBar");
    const threshold = 200;

    window.addEventListener("scroll", () => {
      if (window.scrollY > threshold) {
        header.classList.add("shrink");
        searchBar.classList.add("fixed");
      } else {
        header.classList.remove("shrink");
        searchBar.classList.remove("fixed");
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
