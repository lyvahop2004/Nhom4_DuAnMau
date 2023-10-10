<?php
session_start();
include('./connect.php');
// $user=[];
//giải thích nếu có $_SESSION['user'] thì sẽ gán $user = $_SESSION['user'] còn không có thì bằng rỗng
$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : [];
// $user = $_SESSION['user'];
?>
<?php
include('./connect.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE product_id = $id";

    $query = mysqli_query($mysqli, $sql);

    $data = mysqli_fetch_array($query);

}
?>

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
    <link rel="stylesheet" href="./css/head-foot.css" />
    <link rel="stylesheet" href="./css/sp.css" />

  </head >
  <body>
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
          <li>
            <a href="#forher">Đồ nữ</a>
            <!-- <ul class="sub-menu">
              <li><a href=#">Áo croptop</a></li>
              <li><a href="#">Đầm nữ</a></li>
              <li><a href="#">Váy nữ</a></li>
            </ul> -->
          </li>
          <li><a href="blog.php">Blog</a></li>
          <li>
          <?php if (isset($user['username'])) { ?>
            <a href="#"><?php echo "Hello " . $user['username']; ?></a>
            <ul class="sub-menu">
            <?php if ($user['role'] == 1) { ?>
              <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
            <?php } ?>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <li><a href="#">Sửa thông tin</a></li>
            </ul>
            <?php } else { ?>
            <a href="#">Tài khoản</a>
            <ul class="sub-menu">
              <li><a href="login.php">Đăng Nhập</a></li>
              <li><a href="sign_up.php">Đăng Ký</a></li>

            </ul>
            <?php } ?>
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
    
    <div class="product-container" style="  margin-bottom: 300px; margin-top:100px;">

      <div class="product-card product sp">
            <?php echo "<img src='./uploads/" . $data['product_image_main'] . "'width='100%';height:400px;>"; ?>
            <?php echo "<img src='./uploads/" . $data['product_image_first'] . "'width='100%';height:400px;>"; ?>
            <?php echo "<img src='./uploads/" . $data['product_image_second'] . "'width='100%';height:400px;>"; ?>
            <?php echo "<img src='./uploads/" . $data['product_image_third'] . "'width='100%';height:400px;>"; ?>
        </div>
        <div class="product-card product info">
            <h3><?php echo $data['product_name'] ?></h3>
            <p>$ <?php echo $data['product_price'] ?> VND</p>
            <p><?php echo $data['product_status'] ?></p>
            <p>Số lượng kho: <?php echo $data['product_quantity'] ?></p>

          <div class="button-1line">
            <a class="button" style="text-align: center;" href="chitietsanpham.php?id=<?php echo $data['product_id'] ?>">Thêm vào giỏ hàng </a>
            <!-- <i class="fa-solid fa-cart-plus"></i> -->
            <button type="submit" class="button">Mua ngay</button>
          </div>
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
</html>