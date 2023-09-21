<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/91ad5c6d6a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Thông tin đơn hàng</title>
    <link rel="stylesheet" href="./css/index2.css">
    <link rel="stylesheet" href="./css/info.css">
</head>

<body>
    <header>
        <nav class="menu">
            <ul class="nav-bar">
                <li><a href="index2.html">Trang chủ</a></li>
                <li><a href="/">Đồ nam</a>
                    <ul class="sub-menu">
                        <li><a href="/">Áo sơ mi</a></li>
                        <li><a href="/">Quần jean</a></li>
                        <li><a href="/">Giày da</a></li>
                    </ul>
                </li>
                <li><a href="about.html">Về H2T</a></li>
                <li><a href="/">Đồ nữ</a>
                    <ul class="sub-menu">
                        <li><a href="/">Áo croptop</a></li>
                        <li><a href="/">Đầm nữ</a></li>
                        <li><a href="/">Váy nữ</a></li>
                    </ul>
                </li>

                <li><a href="/">Tài Khoản</a>
                    <ul class="sub-menu">
                        <li><a href="login.php">Đăng Nhập</a></li>
                        <li><a href="sign_up.php">Đăng Ký</a></li>
                        <li><a href="/">Sửa thông tin</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- <li><a href="#"><img src="./image/logoh2t.png" class="logo"></a></li> -->
        <div class="search">
            <input type="text" id="text" class="search-input" placeholder="Bạn tìm gì hôm nay ?" spellcheck="false">
            <button class="btn-search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="icon">
            <li class="list-icon"><i class="fa-solid fa-bag-shopping"></i> <a href="#">Giỏ hàng</a></li>
            <li class="list-icon"><i class="fa-solid fa-phone"></i> + 84 306 6845</li>
        </div>
    </header>

    <section class="info-details">
        <div class="parent">
            <div class="info">


                <div class="info-user">
                    <form action="info.php">
                        <div class="container-form">
                            <div class="modal">
                                <div class="modal__header">
                                <div class="logo">
                                    <img src="./image/logoh2t.png" alt=""> <br>
                                </div>
                                    <span class="modal__title">Thông tin đơn hàng</span>
                                </div>
                                <div class="modal__body">
                                    <div class="input">
                                        <label class="input__label">Name:</label>
                                        <input class="input__field" type="text" placeholder="Họ và tên của bạn...">
                                        <p class="input__description">Không quá 100 kí tự</p>
                                    </div>
                                    <div class="input">
                                        <label class="input__label">Phone:</label>
                                        <input class="input__field" type="text" placeholder="Số điện thoại của bạn...">
                                    </div>
                                    <div class="input">
                                        <label class="input__label">Address:</label>
                                        <input class="input__field" type="text" placeholder="Địa chỉ của bạn...">
                                    </div>
                                    <div class="input">
                                        <label class="input__label">Ghi chú</label>
                                        <textarea class="input__field input__field--textarea"></textarea>
                                        <p class="input__description">Sau khi hoàn tất đơn hàng khoảng 60-90 phút (trong giờ hành chính), YODY sẽ nhanh chóng gọi điện xác nhận lại thời gian giao hàng với bạn. H2T xin cảm ơn!</p>
                                    </div>
                                </div>
                                <div class="modal__footer">
                                    <button class="button button--primary">Hoàn tất</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="cart">
                <h2 class="cart-title">Đơn hàng của bạn</h2><br>
                <div class="container-product">
                    <img class="image-product" src="./image/anh5.png">
                    <p style="font-weight:700; font-size:1.1rem;">Tên sản phẩm 01</p><br>
                    <p  class="">Color/Size</p>
                    <p>399.00 VND</p>
                </div>

                <div class="container-total">
                    <!-- <img class="image-product" src="./image/anh5.png">
                    <p style="font-weight:700; font-size:1.1rem;">Tên sản phẩm 01</p><br>
                    <p  class="">Color/Size</p>
                    <p>399.00 VND</p> -->
                </div>
                
            </div>
        </div>
    </section>

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