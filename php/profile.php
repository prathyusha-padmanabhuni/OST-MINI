<?php
  session_start();
  require_once "pdo.php";
  try{
    if(isset($_SESSION['username']))
    {
        $user=$_SESSION['username'];
        $sql="select * from customer where customerid=$user";
        $stmt=$pdo->query($sql);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
    }
    else
    {
        echo '<p style="font-size:30px ; overflow:hidden"> login/signup </p>';
    }
  }
  catch(Exception $ex)
  {
      echo "<h6>internal error</h6>";

  }
  
    

   

?>
<!DOCTYPE html>
<html>
     <head>
         <title>ANITS E-CANTEEN | about_us</title>
		    <!-- <link rel="stylesheet" type="text/css" href="stylecss/homepage.css"> -->
         <link rel="stylesheet" type="text/css" href="stylecss/profile.css">
     </head>
     <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
                </div>
                <nav>
                    <ul>
                    <li ><a href="homepage.php">Home</a></li>
                    <li ><a href="menu.php">menu</a></li>
                    <li><a href="trackorder.php" style="color:red;font-weight:bold"> trackorder</a></li>
                    <li><a href="orderhistory.php">history</a></li>
                    <li><a href="logout.php">logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div style="min-height: 500px;">
          <center>
            <div class="box">
              
               <?php 
               if (isset($row['photo']))
                    echo '<img src="uploads/'.$row['photo'].'">';
                else
                    echo '<img src="images/login1.jpg">';
               ?>
              <!-- <input type="file" name="" id="file" accept="image/*"> -->
              <a href="profileupdate.php" style="color:red;font-size:20px ">EDIT</a>
              <!-- <a href="profileupdate.php" >EDIT</a>
              <input type= "text" name="" placeholder="User Name">
              <input type="email" name="" placeholder="Email ID">
              <input type="text" name="" placeholder="Phone Number">
              <input type="text" name="" placeholder="Roll Number">
              <input type="text" name="" placeholder="Fine">
              <button style="float: center;margin:10px 0 18.2% 0;">LOGOUT</button> -->
              <p><?=$t=$row['customerid']??" "?></p>
              <p><?=$t=$row['fname']??" " .' '.$t= $row['lname']??" "?></p>
              <p><?=$t=$row['email']??" "?></p>
              <p><?=$t=$row['phno']??" "?></p>
              <p><?="FINE: " .$t=$row['balance']??" "?></p>
             
              <a href="cart.php">cart</a>
              <a href="favourites.php">favourite</a>
              <a href="complaint.php">complaint</a>
               <br>
               <br>
              <button style="float: center;margin:10px 0 18.2% 0;">LOGOUT</button>
              </div>
	      	</center>
        </div>
        <footer>
            <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
            <p1>follow us on</p1>
            <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
            <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
        </footer>
    </body>
</html>
