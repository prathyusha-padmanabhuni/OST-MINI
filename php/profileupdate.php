  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CANTEEN || profile update</title>
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
          
          <li><a href="profile.php">BACK</a></li>
          <li><a href="homepage.php">HOME</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div style="min-height: 500px;"> 
    
    <form method="post"  action="upload1.php" enctype="multipart/form-data">
      <table border="0" bgcolor="coral" align="center" cellspacing="20">
        <th colspan="2" >PROFILE UPDATE</th>
      
        <tr>
          <td>first Name</td>
          <td><input type="text" name=fname placeholder="first name" ></td>
        </tr>
        <tr>
          <td>Last Name</td>
          <td><input type="text" name=lname placeholder="last name" ></td>
        </tr>
        <tr>
          <td>Email Id</td>
          <td><input type="text" placeholder="Email Id" name="email" ></td>
        </tr>
      
        <tr>
          <td>Phone Number</td>
          <td><input type="text" placeholder="Phone Number" name="phno" ></td>
        </tr>
        <tr>
          <td>Photo</td>  
          <td>
              <input type="file" name="my_image">
          </td>
        </tr>
        
         
        <tr>
          <td>like to change password :</td>  
          <td>
              <input name="when" type="radio" value="yes">YES</input>
              <input name="when" type="radio" value="no" >NO</input>
          </td>
        </tr>
        
        <tr>
          <!-- <td colspan="2" align="center"><a href ="add.html"><input type="submit" id="button" name="submit"></a></td>   -->
          <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="submit"></a></td>  
        </tr>
      </table>
    </form>
      
  </div>
 <footer>
  <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
  <p1>follow us on</p1>
  <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
  <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
</footer>
</body>

</html>
