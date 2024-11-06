
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Wineverse is a premium wine e-shop with the mission to bring the best possible quality of wine to people.">
        
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <!-- <link rel="stylesheet" type="text/css" href="resources/css/style.css"> -->
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        <title>Winev</title>
        
<!--        favicon-->
<!--
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicons/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicons/site.webmanifest">
        <link rel="mask-icon" href="/resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/resources/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/resources/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
-->
<!--        -->
        
    </head>
    <body>
        <header  class="cart-page">
            <nav>
                <div class="row" style="max-width: 1400px; margin:auto">
                    <a href="index.php">
                        <img src="resources/img/wine.png" alt="Wineverse logo" class="logo">
                    </a>
                    
                    <ul class="main-nav js--main-nav">
                        <li><a href="index.php#features">About us</a></li>
                        <li><a href="index.php#app">Download our app</a></li>
                        <li><a href="user.php">Log in/Sign up</a></li>
                    <li><a href="product.php">Product</a></li>

                        <li><a href="index.php#form" class="js--scroll-to-form">Contact</a></li>
                        <li><a href="cart.php" class=""><i class="fa-solid fa-cart-shopping " ></i><span style="margin-left: 10px;">0</span></a></li>
                        <li><a href="#"><i class="fa-solid fa-user"></i><span class="username" style="font-size:11px">

                        <?php 
                     // Include the PHP code to check the session and display the username
                     include 'customerlogin.php'; 
                        ?>
                        </span></a></li>
                        
                    </ul>
                    <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                </div>
            </nav>
        </header>
        
        <div class="products-container">
            <div class="product-header">
                <h5 class="product-title">PRODUCT</h5>
                <h5 class="price">PRICE</h5>
                <h5 class="quantity">QUANTITY</h5>
                <h5 class="total">TOTAL</h5>
            </div>
            <div class="products">

            </div>
            <a class="btn btn-full" href="checkout.php" id="ckeckout-btn">Start Checkout</a>
        </div>
        
        <footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">iOS App</a></li>
                        <li><a href="#">Android App</a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-google"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <p>
                    Copyright &copy; 2024 by Tuan Anh
                </p>
            </div>
        </footer>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="resources/js/script.js"></script>
    
</body>  
<script src="./cart.js"></script>
<script src="https://kit.fontawesome.com/8f5cfa2571.js" crossorigin="anonymous"></script>

    
</html>