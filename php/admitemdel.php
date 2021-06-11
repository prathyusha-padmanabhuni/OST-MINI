<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CANTEEN || item del</title>
    <link rel="stylesheet"  href="stylecss/admitemdel.css">
    
</head>   
<body>
  <header>
    <div class="container">
      <div id="branding">
        <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
        
      </div>
      <nav>
      <ul>
                      <li ><a href="admin.php">BACK</a></li>
                      <li><a href="admcmpview.php">CMP VIEW</a></li>
                      <li><a href="admordview.php">ORD VIEW</a></li>
                      <li><a href="profile.php">profile</a></li>
             </ul>
      </nav>
    </div>
  </header>
    <div style="min-height: 500px;">
    <div class="sidebar">
        <nav>
            <ul >
                
                    <li><a href="admitemaddqty.php">ADD ITEM QTY</a>
                    </li>
                    <li><a href="admitemview.php">VIEW ITEM</a>
                    </li>
                    <li><a href="admitemadd.php">ADD ITEM</a>
                    </li>
            </ul>
        </nav>
        </div>
      <form method="post" action="admitemdel.php">
          
        <table border="0"  align="center" cellspacing="20">
          <th colspan="2" >DELETE ITEMS</th>
          
          <tr>
            <td>Item Name</td>
            <td><input type="text" placeholder="Item Name" name="iname" required></td>
            <td id="id1"></td>
          </tr>
        
          <tr>
            <td>Item Id</td>
            <td><input type="text" placeholder="Item Id" name="iid" required></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" id="button"></td>
          </tr>

        </table>
      </form>
  </div>
      <?php
                require_once "pdo.php";
                if(isset($_POST['submit'])) 
                  {
                      $roll=$_POST['iid'];
                      $sql="select * from menu where  itemid=$roll";
                      $stmt=$pdo->query($sql);
                      $row=$stmt->fetch(PDO::FETCH_ASSOC);
              
              
                      if ($row===false)
                      {
                        echo "<script> 
                        document.getElementById('id1').innerHTML = 'invalid id'
                        </script>";
                      }
                      else
                      {
                        if($row['iname']===$_POST['iname'])
                        {
                          $sql="delete from `menu` where  itemid=$roll";
                          // $stmt=
                          $pdo->query($sql);
                          // $stmt->execute(array(':user'=>$roll));
                          header("Location:admitemview.php");
                        }

                        else
                        {
                            echo "<script> 
                            document.getElementById('id2').innerHTML = 'inavalid item name'
                            </script>";
                      }
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
