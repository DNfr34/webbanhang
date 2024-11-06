<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
    <link rel="stylesheet" href="./style.css">
    <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
    <title>Wine</title>
    <title>Document</title>
</head>

<body>
    <header class="cart-page">
        <nav>
            <div class="row" style="max-width: 1400px; margin:auto">
               

                <ul class="main-nav js--main-nav">
                    <li><a href="index.php#features">About us</a></li>
                    <li><a href="index.php#app">Download our app</a></li>
                    <li><a href="user.php">Log in/Sign up</a></li>
                    <li><a href="product.php">Product</a></li>
                    <li><a href="index.php#form" class="js--scroll-to-form">Contact</a></li>
                    <li><a href="cart.php" class=""><i class="fa-solid fa-cart-shopping "></i><span style="margin-left: 10px;">0</span></a></li>
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

    <section>
        <div>
            <h2>Product List</h2>
        </div>
        <div class="grid-container">
            <div class="grid-column">
                <img src="./resources/img/pen/p1.jpeg" alt="p1">
                <h3>Pen 1</h3>
                <p> <i class="fa-solid fa-dollar-sign"></i> Price: <b> $20 </b></p>
                <i class="fa-solid fa-user"></i>
                1600+ happy buyers
                <div>

                    <a href="#" onclick="return false;" class="btn btn-full add-cart" data-tag="p1">Add to cart</a>
                    
                </div>
            </div>
            <div class="grid-column">
                <img src="./resources/img/pen/p2.jpeg" alt="Product 2">
                <h3>Pen 2</h3>
                <p> <i class="fa-solid fa-dollar-sign"></i> Price: <b> $100 </b></p>
                <i class="fa-solid fa-user"></i>
                1200+ happy buyers
                <div>

                    <a href="#" onclick="return false;" class="btn btn-full add-cart" data-tag="p2">Add to cart</a>
                    
                </div>
            </div>
            <div class="grid-column">
                <img src="./resources/img/pen/p15.jpeg" alt="Product 3">
                <h3>Pen 3 </h3>
                <p> <i class="fa-solid fa-dollar-sign"></i> Price: <b> $50 </b> </p>
                <i class="fa-solid fa-user"></i>
                600+ happy buyers

                <div>

                    <a href="#" onclick="return false;" class="btn btn-full add-cart" data-tag="p15">Add to cart</a>
                    
                </div>
            </div>
            <div class="grid-column">
                <img src="./resources/img/pen/p11.jpeg" alt="Product 4">
                <h3>Pen 4</h3>
                <p> <i class="fa-solid fa-dollar-sign"></i> Price: <b> $40</b></p>
                <i class="fa-solid fa-user"></i>
                700+ happy buyers

                <div>

                    <a href="#" onclick="return false;" class="btn btn-full add-cart " data-tag="p11">Add to cart</a>
                    
                </div>


            </div>
            <div class="grid-column">
                <img src="./resources/img/pen/p8.jpeg" alt="Product 5">
                <h3>Pen 5</h3>
                <p> <i class="fa-solid fa-dollar-sign"></i> Price: <b> $235</b></p>
                <i class="fa-solid fa-user"></i>
                800+ happy buyers

                <div>

                    <a href="#" onclick="return false;" class="btn btn-full add-cart" data-tag="p6">Add to cart</a>
                    
                </div>


            </div>
            <div class="grid-column">
                <img src="./resources/img/pen/p5.jpeg" alt="Product 6">
                <h3>Pen 6 </h3>
                <p> <i class="fa-solid fa-dollar-sign"></i> Price: <b> $152</b></p>
                <i class="fa-solid fa-user"></i>
                1800+ happy buyers

                <div>

                    <a href="#" onclick="return false;" class="btn btn-full add-cart" data-tag="p4">Add to cart</a>
                    
                </div>


            </div>

            <div class="grid-column">
                <img src="./resources/img/pen/p24.jpeg" alt="Product 7">
                <h3>Pen 7</h3>
                <p> <i class="fa-solid fa-dollar-sign"></i> Price: <b> $25</b></p>
                <i class="fa-solid fa-user"></i>
                1000+ happy buyers

                <div>

                    <a href="#" onclick="return false;" class="btn btn-full add-cart" data-tag="p24">Add to cart</a>
                    
                </div>


            </div>

            <div class="grid-column">
                <img src="./resources/img/pen/p14.jpeg" alt="Product 8">
                <h3>Pen 8</h3>

                <p> <i class="fa-solid fa-dollar-sign"></i> Price: <b> $15</b></p>
                <i class="fa-solid fa-user"></i>
                100+ happy buyers

                <div>

                    <a href="#" onclick="return false;" class="btn btn-full add-cart" data-tag="p14">Add to cart</a>
                    
                </div>


            </div>



        </div>
    </section>

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





</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="vendors/js/jquery.waypoints.min.js"></script>
<script src="resources/js/script.js"></script>
<script src="cart.js"></script>
<script src="https://kit.fontawesome.com/8f5cfa2571.js" crossorigin="anonymous"></script>


</html>