<!DOCTYPE html>
<?php 
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylecss/orderhistory.css">
    <script
   src="https://kit.fontawesome.com/64d58efce2.js"
   crossorigin="anonymous"
  ></script>
    <title>order history</title>
    <header>
        <div class="container1">
        <div id="branding">
            <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
        </div>
        <nav>
            <ul>
            <li class="current"><a href="homepage.php">Home</a></li>
            <li ><a href="menu.php">menu</a></li>
            <li><a href="favourites.php"> favourites</a></li>
            <li><a href="cart.php">cart</a></li>
            <li><a href="profile.php">profile</a></li> 
            </ul>
        </nav>
        </div>
    </header>
</head>
<body>
    <h3>Order History</h3>
    <div class="timeline">
    <?php
              require_once "pdo.php";
              try{
                if(isset($_SESSION['username']))
                {
                    
                    $user=$_SESSION['username'];
                    $sql="select * from orderp where customerid=$user   order  by orderid desc";
                    $stmt=$pdo->query($sql);
                    $var=0;

                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {              
                         if($var%2==0)
                        {
                         ?>
                        <div class="container left">
                          <div class="date" ><?= $row['odate'] ?></div>
                           
                          <i class="icon fa fa-cutlery"></i>
                          <div class="content">
                            <h2><?= $row['orderid'] ?></h2>
                            <h4>Price:550</h4>
                            <p>
                            <?php
                               
                              $sql2="select * from orderc where orderid=:ord ";
                              $stmt2=$pdo->prepare($sql2);
                              $stmt2->execute(array(':ord'=>$row['orderid']));
                              while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
                              {
                                $sql3="select * from menu where itemid=:itm";
                                $stmt3=$pdo->prepare($sql3);
                                $stmt3->execute(array(':itm'=>$row2['itemid']));
                                $row3=$stmt3->fetch(PDO::FETCH_ASSOC);
                                  echo $row3['iname']." ,";
                              }
                           
                            ?>
                              
                            </p>
                            <a href="cart.html"><button>BOOK AGAIN</button></a>
                          </div>
                        </div>
                        <?php
                        $var=$var+1; } 
                        else 
                        {?>
                        
                        <div class="container right">
                          <div class="date"><?= $row['odate'] ?></div>
                          <i class="icon fa fa-cutlery"></i>
                          <div class="content">
                            <h2><?= $row['orderid'] ?></h2>
                            <h4>Price:550</h4>
                            <p>
                            <?php
                               
                              $sql2="select * from orderc where orderid=:ord ";
                              $stmt2=$pdo->prepare($sql2);
                              $stmt2->execute(array(':ord'=>$row['orderid']));
                              while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
                              {
                                $sql3="select * from menu where itemid=:itm";
                                $stmt3=$pdo->prepare($sql3);
                                $stmt3->execute(array(':itm'=>$row2['itemid']));
                                $row3=$stmt3->fetch(PDO::FETCH_ASSOC);
                                  echo $row3['iname']." ,";
                              }
                           
                            ?>
                              
                            </p>
                            <a href="cart.html"><button>BOOK AGAIN</button></a>
                          </div>
                        </div>
                        
              <?php
                      $var=$var+1;  }
                    }
                }
                else
                {
                    echo '<p style="font-size:30px ; overflow:hidden"> login/signup </p>';
                }
            }
            catch(Exception $ex)
            {
                echo $ex;
                                
            }
             ?>
      </div>
</body>
<footer>
    <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
    <p1>follow us on</p1>
    <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
    <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
  </footer>
</html>