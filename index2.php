<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/91ad5c6d6a.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>H2T SHOP</title>
    <link rel="stylesheet" href="index2.css" />
  </head >
  <body onclick="loadAnh()">
    <header id="header">
      <nav class="menu">
        <ul class="nav-bar">
          <li><a href="index2.php">Trang chủ</a></li>
          <li>
            <a href="#forman">Đồ nam</a>
            <!-- <ul class="sub-menu">
              <li><a href="#">Áo sơ mi</a></li>
              <li><a href="#">Quần jean</a></li>
              <li><a href="#">Giày da</a></li>
            </ul> -->
          </li>
          <li><a href="about.html">Về H2T</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li>
            <a href="#forher">Đồ nữ</a>
            <!-- <ul class="sub-menu">
              <li><a href=#">Áo croptop</a></li>
              <li><a href="#">Đầm nữ</a></li>
              <li><a href="#">Váy nữ</a></li>
            </ul> -->
          </li>

          <li>
            <a href="#">Tài khoản</a>
            <ul class="sub-menu">
              <li><a href="login.php">Đăng Nhập</a></li>
              <li><a href="sign_up.php">Đăng Ký</a></li>
              <li><a href="#">Sửa thông tin</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- <li><a href="#"><img src="./image/logoh2t.png" class="logo"></a></li> -->
      <div class="search">
        <input
          type="text"
          id="text"
          class="search-input"
          placeholder="Bạn tìm gì hôm nay ?"
          spellcheck="false"
        />
        <button class="btn-search" type="submit">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
      <div class="icon">
        <li class="list-icon">
          <i class="fa-solid fa-bag-shopping"></i> <a href="#">Giỏ hàng</a>
        </li>
        <li class="list-icon">
          <i class="fa-solid fa-phone"></i> + 84 306 6845
        </li>
      </div>
    </header>

    <a href="#header" class="btn-go"><i class="fa-solid fa-arrow-up" style="margin-top:15px"></i></a>
    
    <section class="banner">
      <div class="parent">
        <div class="banner-big item">
          <h2 class="title-banner">HOT EVENTS</h2>
          <img id="slideshow" src="./image/anh0.png" style="width: 800px" />
          <h1 id="title">1/5</h1>
          <!-- <button class=" color" onclick="slideshow(1)">First</button> -->
          <button class="canGiuaNut1 color1" onclick="slideshow(2)">
            <i class="fa-solid fa-circle-arrow-left"></i>
          </button>
          <button class="canGiuaNut2 color2" onclick="slideshow(3)">
            <i class="fa-solid fa-circle-arrow-right"></i>
          </button>
          <!-- <button class="color" onclick="slideshow(4)">Last</button> -->
        </div>
        <div class="banner-small">
          <h2 class="title-bannersmall">SALE EVENTS</h2>

          <div>
            <img class="mySlides" src="./image/anh7.png" />
            <img class="mySlides" src="./image/anh8.png" />
            <img class="mySlides" src="./image/anh9.png" />
          </div>
        </div>
        <div class="image">
          <img src="./image/anh6.png" alt="" />
        </div>
      </div>
    </section>


<!--CATEGORIES-->
<div class="categories-design">
<h2 class="new-product-title">Doanh mục sản phẩm bạn quan tâm</h2>
<div class="select" >
  <select>
    <option selected disabled>Doanh mục bạn tìm</option>
    <option value="1">Quần nam</option>
    <option value="2">Váy nữ</option>
    <option value="3">Đầm</option>
  </select>
</div>
</div>


<!-- design section new product -->
      <h2 class="new-product-title">NEW PRODUCT</h2>
      <div class="parent-product">

        <div class="div1 product first">
          <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
          <h3>San pham thu nhat</h3>
          <p>$ 150000 VND</p>
          <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div2 product second">
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu hai</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div3 product third">
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu ba</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div4 product forth"> 
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu tu</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>

      </div>


      <!-- design section hot product -->
      <h2 class="new-product-title">HOT PRODUCT</h2>
      <div class="parent-product">

        <div class="div1 product first">
          <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
          <h3>San pham thu nhat</h3>
          <p>$ 150000 VND</p>
          <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div2 product second">
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu hai</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div3 product third">
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu ba</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div4 product forth"> 
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu tu</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>

      </div>

            <!-- design section for man -->
            <h2 class="new-product-title">FOR MAN</h2>
      <div class="parent-product" id="forman">

        <div class="div1 product first">
          <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
          <h3>San pham thu nhat</h3>
          <p>$ 150000 VND</p>
          <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div2 product second">
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu hai</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div3 product third">
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu ba</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div4 product forth"> 
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu tu</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>

      </div>

            <!-- design section for her -->
            <h2 class="new-product-title">FOR HER</h2>
      <div class="parent-product" id="forher">

        <div class="div1 product first">
          <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
          <h3>San pham thu nhat</h3>
          <p>$ 150000 VND</p>
          <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div2 product second">
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu hai</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div3 product third">
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu ba</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>
        <div class="div4 product forth"> 
        <a href="chitietsanpham.php"><img src="./image/anh6.png" style="width: 100%; height:400px;"></a>
        <h3>San pham thu tu</h3>
        <p>$ 150000 VND</p>
        <button type="submit" class="button">Xem thêm</button>
        </div>

      </div>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">affiliate program</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">shipping</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>online shop</h4>
            <ul>
              <li><a href="#">watch</a></li>
              <li><a href="#">bag</a></li>
              <li><a href="#">shoes</a></li>
              <li><a href="#">dress</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="slideshow.js"></script>
  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1;
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 4000); // thay doi anh moi 4s
    }
  </script>
</html>
