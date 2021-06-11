<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANITS E-CANTEEN || ADMIN </title>
    <link rel="stylesheet"  href="stylecss/forget.css">    
    
</head> 

<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
        
      </div>
      <nav>
        <ul>
          
          <li><a href="homepage.php">BACK</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div style="min-height: 400px;"> 
    <form method="post" action="forget.php">
      <table border="0" bgcolor="coral" align="center" cellspacing="20">
        <th colspan="2" >An OTP send to ur mail</th>
        <tr>
          <td>OTP</td>
          <td><input type="text" placeholder="otp" name="otp" ></td>
        </tr>
      
        <tr>
          <td colspan="2" align="center"> <input type="submit" id="button" name="submit"></a></td>
        </tr>
        <tr>
           <td colspan="2" align="center" id="id1"></td>
        </tr>
      </table>
    </form>
      
  </div>
  <?php
	session_start();
	require_once "pdo.php";
	if(isset($_POST['submit'])) 
	{
		$notp = $_SESSION['otp'];
    echo  $notp;
		$otp = $_POST["otp"];
    echo $otp;
		if($otp == $notp)
		{
			header("LOCATION:password2.php");
		}
		else{
			echo "<script> 
					 document.getElementById('id1').innerHTML = 'incorrect password'
					 </script>";
		}
  }
?>
 <footer>
  <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
  <p1>follow us on</p1>
  <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
  <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
</footer>
</body>

</html>
