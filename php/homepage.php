<?php
  session_start();
  require_once "pdo.php";
?>
<!DOCTYPE html>
<html>
  <head>
    
    <title>ANITS E-CANTEEN | Welcome</title>
    <link rel="stylesheet" type="text/css" href="stylecss/homepage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
          
        </div>
        <nav>
          <ul>
            <li class="current"><a href="homepage.php">Home</a></li>
            <li ><a href="about_us.php">about_us</a></li>
            <li><a href="contact_us.php"> contact_us</a></li>
            <li><a href="sign_up.php">signin/up</a></li>
            <li><a href="menu.php">MENU</a></li>
          </ul>
        </nav>
      </div>
    </header>
     
    <div>
    <img class="mySlides" src="images\canteen.jpeg">
    <img class="mySlides" src="images\canteen2.jpeg">
     

    <button class="button display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="button display-right" onclick="plusDivs(+1)">&#10095;</button>
    <h1 style="color: rgb(172, 9, 36);"> Shop by Category</h1>
  </div >
  <div class="grid-container">
    <div class="order">
      <a href="menu.php#MEALS"><img  class="category" src="images\meal.jpeg"></a>
      <div class="left">Meals</div>
    </div>
    <div class="order">
      <a href="menu.php#ICECREAM"><img class="category" src="images\icecreams.jpeg"></a>
      <div class="left">Icecreams</div>
    </div>
    <div class="order">
      <a href="menu.php#DRINKS"><img class="category" src="images\milkshake.jpeg"></a>
      <div class="left">Drinks</div>
    </div>
    <div class="order">
      <a href="menu.php#SNACKS"><img  class="category" src="images\starters.jpeg"></a>
      <div class="left">Snacks</div>
    </div>
    <div class="order">
      <a href="menu.php#TIFFIN"><img class="category" src="images\puri.jpg"></a>
      <div class="left">Tiffins</div>
    </div>
    <div class="order">
      <a href="menu.php#CHOCOLATES"><img class="category" src="images\chocolates.jpeg"></a>
      <div class="left">Chocolates</div>
    </div>
    <div class="order">
      <a href="menu.php#BIRYANIS"><img  class="category" src="images\friedrice.png"></a>
      <div class="left">Biryanis</div>
    </div>
    <div class="order">
      <a href="menu.php#DINNER"><img class="category" src="images\chapathi.jpg"></a>
      <div class="left">DINNER</div>
    </div>
    <!-- <div class="order">
      <a href="menu.html"><img class="category" src="C:\Users\sindh\OneDrive\Documents\canteen management\images\milkshake.jpg"></a>
      <div class="left">Milkshakes</div>
    </div> -->
  </div>
    <script>
      var slideIndex = 1;
      showDivs(slideIndex);
      
      function plusDivs(n) {
        showDivs(slideIndex += n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        x[slideIndex-1].style.display = "block";  
      }
      </script>
    <footer>
      <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
      <p1>follow us on</p1>
      <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
      <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
    </footer>
  </body>
</html>
