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
        <!-- <link rel="stylesheet" type="text/css" href="resources/css/queries.css"> -->
        <!-- <link rel="stylesheet" href="/tuananh/resources/css/style.css"> -->
        <link rel="stylesheet" href="./css/style.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Wine</title>
        
    </head>
    <body>
        <header class="home-page">
            <nav>
                <div class="row" style="max-width: 1400px; margin:auto" >
                   
                    
                    <ul class="main-nav js--main-nav">
                        <li><a href="#features">About us</a></li>
                        <li><a href="#app">Download our app</a></li>
                        <li><a href="user.php">Log in/Sign up</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="#form" class="js--scroll-to-form">Contact</a></li>
                        <li><a href="cart.php"><i class="fa-solid fa-cart-shopping " ></i><span style="margin-left: 10px;"> 0 </span></a></li>
                        <li><a href="#"><i class="fa-solid fa-user"></i><span class="username" style="font-size:11px">

                        <?php 
                     // Include the PHP code to check the session and display the username
                     include 'customerlogin.php'; 
                        ?>
                        </span></a></li>
                    </ul>
                    <!-- <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a> -->
                </div>
            </nav>
            <div class="hero-text-box">
                <h1><b> Bút là bạn đồng hành bên cạnh mỗi chúng ta.</b></h1>
                <a class="btn btn-full " href="#">Chất Liệu</a>
                <a class="btn btn-ghost " href="#">Xem Thêm</a>
            </div>
            
        </header>
        
       
        
        <section class="section-wines" style="margin-top :40px;">
            <ul class="wines-showcase clearfix">
                <li>
                    <figure class="wine-photo">
                        <img src="./resources/img/pen/p1.jpeg" alt="Wine photo">
                    </figure>
                </li>
                <li>
                    <figure class="wine-photo">
                        <img src="resources/img/pen/p2.jpeg" alt="Wine photo">
                    </figure>
                </li>
                <li>
                    <figure class="wine-photo">
                        <img src="resources/img/pen/p15.jpeg" alt="Wine photo">
                    </figure>
                </li>
                <li>
                    <figure class="wine-photo">
                        <img src="resources/img/pen/p20.jpeg" alt="Wine photo">
                    </figure>
                </li>
            </ul>
     
        </section>   
        <section class="section-form js--section-form">
            <div class="row">
                <h2>We hear you! Drop us a line.</h2>
            </div>
            <div class="row">

                <form method="POST" action="contact.php" class="contact-form">
                    
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find" id="find">
                                <option value="friends" selected>Friends</option>
                                <option value="search">Search engine</option>
                                <option value="ad">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes, please
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Submit" name="submitBtn">
                        </div>
                    </div>
                    
                </form>
                
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
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/script.js"></script>
    <script src="cart.js"></script>
    
    </body>  
    <script src="https://kit.fontawesome.com/8f5cfa2571.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  
    
</html>