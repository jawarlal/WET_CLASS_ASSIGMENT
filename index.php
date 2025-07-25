<!DOCTYPE html>
<html lang="zxx">
<?php include ('my_con.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Mart</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo-1.jpg" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span></span></a></li>
            </ul>
            <div class="header__cart__price">item: <span></span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> lohanasanjay460@gmail.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            <li><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <?php include ('cart_info.php'); ?>

                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All Categories</span>
                        </div>
                        <ul>
                           <li><a href="#">Smartphones</a></li>
                           <li><a href="#">Laptops</a></li>
                           <li><a href="#">Tablets</a></li>
                           <li><a href="#">Smart Watches</a></li>
                           <li><a href="#">LED TVs</a></li>
                           <li><a href="#">Bluetooth Speakers</a></li>
                           <li><a href="#">Gaming Consoles</a></li>
                           <li><a href="#">Headphones</a></li>
                           <li><a href="#">Cameras & Drones</a></li>
                           <li><a href="#">Computer Accessories</a></li>
                           <li><a href="#">Home Appliances</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__phone">
                            
                            <div class="hero__search__phone__text">
                                
                                <a href="admin_home.php " class="primary-btn">ADMIN</a>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/banner-2.jpg">
                        <div class="hero__text">
                            <p>Free Pickup and Delivery Available</p><br><br><br><br><br><br><br><br><br><br><br>
                            <a href="shop-grid.php" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                   <?php
                   for ($i = 1; $i <= 5; $i++) {
                   ?>
                   <div class="col-lg-3">
                       <div class="categories__item set-bg" data-setbg="img/product/p-<?php echo $i; ?>.jpg">
                           <h5><a href="#"></a></h5>
                       </div>
                   </div>
                  <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

   <!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Featured Product</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".category1">Category 1</li>
                        <li data-filter=".category2">Category 2</li>
                        <li data-filter=".category3">Category 3</li>
                        <li data-filter=".category4">Category 4</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php
            // Show 8 products with images p-1.jpg to p-8.jpg
            for ($i = 1; $i <= 8; $i++) {
                // Assign a category class based on image number (just an example)
                $category = 'category' . (($i % 4) + 1);
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo $category; ?>">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="img/product/p-<?php echo $i; ?>.jpg">
                            <ul class="featured__item__pic__hover">
                                <li>
                                    <form action="index.php" method="post">
                                        <input type="hidden" name="ID" value="<?php echo $i; ?>">
                                        <button type="submit" name="addToCartBtn" style="border-radius: 50%; border: none; color: white; background-color: rgb(162,195,19);"><i class="fa fa-shopping-cart"></i></button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Product <?php echo $i; ?></a></h6>
                            <h5>$<?php echo number_format(10 * $i, 2); ?></h5> <!-- Example price -->
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->


   <!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-3.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-5.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->

<!-- Latest Product Section Begin -->
<section class="latest-product spad">
    <div class="container">
        <div class="row">
            <!-- Top Rated -->
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Top Rated</h4>
                    <div class="latest-product__slider owl-carousel">
                        <?php for ($i = 0; $i < 2; $i++) { ?>
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $query = "SELECT * FROM products WHERE category = 'fruit' ORDER BY RAND() LIMIT 3;";
                                $result = mysqli_query($con, $query);
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/product/p-1.jpg" alt="" style="width: 100px;">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?php echo $data[1]; ?></h6>
                                            <span>$<?php echo $data[2]; ?>.00</span>
                                            <div style="margin-top: 5px;">
                                                <img src="img/product/p-2.jpg" alt="" style="width: 30px; margin-right: 5px;">
                                                <img src="img/product/p-3.jpg" alt="" style="width: 30px;">
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Latest Products -->
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Latest Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <?php for ($i = 0; $i < 2; $i++) { ?>
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $query = "SELECT * FROM products WHERE category IN ('vegetable', 'meat') ORDER BY RAND() LIMIT 3;";
                                $result = mysqli_query($con, $query);
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/product/p-1.jpg" alt="" style="width: 100px;">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?php echo $data[1]; ?></h6>
                                            <span>$<?php echo $data[2]; ?>.00</span>
                                            <div style="margin-top: 5px;">
                                                <img src="img/product/p-2.jpg" alt="" style="width: 30px; margin-right: 5px;">
                                                <img src="img/product/p-3.jpg" alt="" style="width: 30px;">
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <!-- Review Products -->
            <div class="col-lg-4 col-md-6">
                <div class="latest-product__text">
                    <h4>Review Products</h4>
                    <div class="latest-product__slider owl-carousel">
                        <?php for ($i = 0; $i < 2; $i++) { ?>
                            <div class="latest-prdouct__slider__item">
                                <?php
                                $query = "SELECT * FROM products ORDER BY RAND() LIMIT 3;";
                                $result = mysqli_query($con, $query);
                                while ($data = mysqli_fetch_array($result)) {
                                ?>
                                    <a href="#" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="img/product/p-1.jpg" alt="" style="width: 100px;">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6><?php echo $data[1]; ?></h6>
                                            <span>$<?php echo $data[2]; ?>.00</span>
                                            <div style="margin-top: 5px;">
                                                <img src="img/product/p-2.jpg" alt="" style="width: 30px; margin-right: 5px;">
                                                <img src="img/product/p-3.jpg" alt="" style="width: 30px;">
                                            </div>
                                        </div>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Hyderabad Sindh Pakistan</li>
                            <li>Phone: +92 321313 3408</li>
                            <li>Email: Jawargangooja87@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                                template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>