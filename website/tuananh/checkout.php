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
  <link rel="stylesheet" type="text/css" href="resources/css/style.css">
  <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
  <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic" rel="stylesheet" type="text/css">
  <title>Wine</title>

</head>

<body>
  <header class="cart-page">
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

  <div class="row">
    <div class="col-75">
      <div class="container">
        <form action="payment.php" method="post">

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname">Full Name</label>
              <input type="text" id="fname" name="fname">
              <label for="email">Email</label>
              <input type="text" id="email" name="email">
              <label for="adr">Address</label>
              <input type="text" id="adr" name="address">
              <label for="city">City</label>
              <input type="text" id="city" name="city">

              <!--            <div class="row">-->
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state">
              </div>
              <div class="col-50">
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" name="zip">
              </div>
              <!--            </div>-->
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <img src="ionicons.designerpack/visa.png">
                <img src="ionicons.designerpack/mastercard.png">
              </div>
              <label for="cardname">Name on Card</label>
              <input type="text" id="cardname" name="cardname">
              <label for="cardnumber">Credit card number</label>
              <input type="text" id="cardnumber" name="cardnumber">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth">

              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv">
                </div>
              </div>
            </div>

          </div>
          <input type="submit" value="Continue to checkout" class="btn-pay">
        </form>
      </div>
    </div>
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
        Copyright &copy; 2024 by Tuan Anh. 
      </p>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="resources/js/script.js"></script>
  <script src="cart.js"></script>

</body>
<script src="https://kit.fontawesome.com/8f5cfa2571.js" crossorigin="anonymous"></script>


</html>