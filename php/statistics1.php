<?php
session_start();
     
require_once "pdo.php";
?>

<?php
    
$count="SELECT itemid,iname FROM menu";






?>

<!DOCTYPE html>
<html>
     <head>
         <title>ANITS E-CANTEEN | about_us</title>
         <link rel="stylesheet" type="text/css" href="stylecss/statistics.css">
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
                    <li ><a href="homepage.html">Home</a></li>
                    <li ><a href="#">menu</a></li>
                    <li><a href="favourite.html"> favourites</a></li>
                    <li><a href="cart.html">cart</a></li>
                    <li><a href="profile.html">profile</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div style="min-height: 500px;">
            <p>

            </p>
            <div class="content">
                <label><b>VIEW STATISTICS:</b></label>
<select class="css-dropdowns" id="branch" name="branch" data-sort='make' data-prefix='' data-label-singular='Make' data-label-plural='Makes' data-no-options='No options' required>
        <option value=''>select</option>
              <option value="daily">daily</option>
              <option value="weekly">weekly</option>
              <option value="monthly">monthly</option>
              </select><br><br>
            </div>

<?php
if($stmt = $db->prepare($count)){
  $stmt->execute();
 $result = $stmt->get_result();
 echo "<table class='center' style='width:75%'><tr class='info'><th>ITEM ID</th><th>ITEM NAME</th><th>NO OF ORDERS</th></tr>";
while($row=$result->fetch_array())
{
$t= mysqli_query($db,"SELECT COUNT(*) AS count FROM order2 WHERE itemid='$row[itemid]'");
$data= mysqli_fetch_assoc($t);
 
echo "<tr><td>$row[itemid]</td><td>$row[iname]</td><td>$data[count]</td></tr>";
}
echo "</table>";
}
 ?> 
</table>
        </div>
        <footer>
            <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
            <p1>follow us on</p1>
            <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
            <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
        </footer>
     </body>
</html>