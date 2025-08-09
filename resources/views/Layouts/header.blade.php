<!DOCTYPE html>
<html lang="fa">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/gh/rastikerdar/kalameh-font@v1.0.0/dist/font-face.css" rel="stylesheet" />


  <style>

    header {
      background-color: #b8b49c;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 130px;
      display: flex;
      align-items: flex-start;
      padding: 15px 22px;
      justify-content: space-between;
      color: black;
      z-index: 1000;
     

    }


    header.shrink {
      height: 75px;
      padding: 10px 18px;
    }



    .logo {
      color: #2c2c2c;
      font-size: 24px;
      cursor: pointer;
      position: relative;
      user-select: none;
      transition: transform 0.3s ease;
    }

    .logo:hover {
      transform: scale(1.15);
    }


    nav ul {
      margin: 0;
      padding: 0 20px;
      list-style: none;
      display: flex;
      gap: 25px;
      /* background-color: #d4ccb6; */
      border-radius: 50px;
      align-items: center;
      flex-grow: 1;
      justify-content: center;
      transition: opacity 0.4s ease;
    }

    nav.hidden {
      opacity: 0;
      pointer-events: none;
    }

    nav ul li a {
      text-decoration: none;
      color: #2c2c2c;
      font-weight: 600;
      padding: 8px 0;
      position: relative;
      display: inline-block;
      transition: transform 0.3s ease;
      font-size: 16px;
    }

    nav ul li a:hover {
      transform: scale(1.15);
    }

    .btn-exit {
      border: none;
      border-radius: 30px;
      padding: 8px 10px;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
      position: relative;
      justify-content: center;
      background: none;
    }

    .user-icon {
      font-size: 24px;
      color: black;
      transition: transform 0.2s ease, filter 0.2s ease;
    }

    .btn-exit:hover .user-icon,
    .btn-exit:active .user-icon {
      transform: scale(1.2);
      filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.4));
    }

    @media (max-width: 768px) {
      nav ul {
        gap: 15px;
      }

      .logo {
        font-size: 20px;
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


    .search-container {
      display: flex;
      background-color: transparent;
      justify-content: center;
      transition: all 0.4s ease;
      z-index: 999;
      position: absolute;
      top: 100px;
      left: 30%;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
      border-radius: 30px;
      width: 40%;

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

    /* حالت فیکس‌شده بعد از اسکرول */
    .search-container.fixed {
      position: fixed;
      top: 15px;
      left: 35%;
      justify-content: center;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
      border-radius: 30px;
      border: none;
      width: 30%;
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
      <i class="bi bi-person-lines-fill user-icon"></i>
    </button>

    <div class="search-container" id="searchBar">
      <input type="text" id="searchInput" placeholder="جستجو...">
      <button class="search-icon" id="searchBtn">
        <i class="bi bi-search "></i>
      </button>

    </div>
  </header>

  <script>
    const header = document.querySelector("header");
    const nav = document.querySelector("nav");
    const searchBar = document.getElementById("searchBar");
    const threshold = 200;

    window.addEventListener("scroll", () => {
      if (window.scrollY > threshold) {
        header.classList.add("shrink");
        nav.classList.add("hidden");
        searchBar.classList.add("fixed");
      } else {
        header.classList.remove("shrink");
        nav.classList.remove("hidden");
        searchBar.classList.remove("fixed");
      }
    });
  </script>

  <script>
    document.getElementById("searchBtn").addEventListener("click", function () {
      const query = document.getElementById("searchInput").value.trim();
      if (query !== "") {
        alert("جستجو برای: " + query);
      } else {
        alert("لطفاً عبارتی برای جستجو وارد کنید.");
      }
    });
  </script>

</body>

</html>