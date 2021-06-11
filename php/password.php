<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANITS E-CANTEEN || password </title>
    <link rel="stylesheet"  href="stylecss/profileupdate.css">   
</head>   
 
<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
        
      </div>
      <nav>
        <ul>
          
          <!-- <li><a href=".">BACK</a></li> -->
          <li><a href="homepage.php">HOME</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div style="min-height: 500px;"> 
    
    <form method="post" action="password.php">
      <table border="0" bgcolor="coral" align="center" cellspacing="20">
        <th colspan="2" >PROFILE UPDATE</th>
      
        <tr>
          <td>present password</td>
          <td><input type="password" placeholder="present" name="passwod" ></td>
		  <p id="id1"></p>
        </tr>
      
        <tr>
          <td>new password</td>
          <td><input type="password" placeholder="new" name="new"></td>
        </tr>
      
        <tr>
          <td>confirm password</td>
          <td><input type="password" placeholder="confirm new"  name="confirm"></td>
        </tr> 
        <tr>
          <td colspan="2" align="center"> <input type="submit" id="button" value="submit" name="submit"></a></td>
        </tr>
      </table>
    </form>
      
  </div>

  <?php
		session_start();
		require_once "pdo.php";
		$roll=$_SESSION['username'];
		$sql="select * from customer where  customerid=$roll";
        $stmt=$pdo->query($sql);
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
		if(isset($_POST['submit']))
		{
			if($row['password']===$_POST['passwod'])
			{
				if($_POST['new']===$_POST['confirm'])
				{
					
					$sql="update `customer` set password=:pwd where customerid=$roll";
					$stmt=$pdo->prepare($sql);
					$stmt->execute(array(':pwd'=>$_POST['confirm']));
					header("Location:profile.php");
				}
			}
			else
			{
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
