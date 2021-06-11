<!DOCTYPE html>
<?php
    session_start();
    
?>
<?php
    require_once "pdo.php";
    if(isset($_POST['cancel']))
    {
        $sql="update orderp set  status=:st where orderid=:id";
        $stmt=$pdo->prepare($sql);
        $stmt->execute(array(':st'=>'5',':id'=>$_POST['orderid']));


        
			$cost=0;
			$sql2="select * from orderc where orderid=:ord ";
			$stmt2=$pdo->prepare($sql2);
			$stmt2->execute(array(':ord'=>$_POST['orderid']));
			while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
			{
				$sql3="select * from menu where itemid=:itm";
				$stmt3=$pdo->prepare($sql3);
				$stmt3->execute(array(':itm'=>$row2['itemid']));
				$row3=$stmt3->fetch(PDO::FETCH_ASSOC);
                $cost=$cost+($row3['cost']*$row2['quant']);
                $sql="update `menu` set  requir=requir+:req where itemid=:it";
                $stmt=$pdo->prepare($sql);
                $stmt->execute(array(':req'=>$row2['quant'],':it'=>$row2['itemid']));
            }

            $sql="update `customer` set  balance=balance+:c/2 where customerid=:id";
                $stmt=$pdo->prepare($sql);
                $stmt->execute(array(':c'=>$cost,':id'=>$_SESSION['username']));
        

        // $sql="update `menu` set  requir=requir-:req where itemid=:it";
        // $stmt=$pdo->prepare($sql);
        // $stmt->execute(array(':req'=>$v,':it'=>$k));
    }
?>
<html>
     <head>
         <title>ANITS E-CANTEEN || track</title>
         <link rel="stylesheet" type="text/css" href="stylecss/trackorder.css">
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
                    <li><a href="favourite.php"> favourites</a></li>
                    <li><a href="cart.php">cart</a></li>
                    <li><a href="profile.php">profile</a></li> 
                    </ul>
                </nav>
            </div>
        </header>
        <div style="min-height: 560px;">
            <div class="tracking">
                <div class="title" style=" font-size: 50px"> <center> <b> Tracking Order </b> </center> </div>
                <br>
            </div>
            <?php
              require_once "pdo.php";
              try{
                if(isset($_SESSION['username']))
                { 
                    $user=$_SESSION['username'];
                    $sql="select * from orderp where customerid=$user  and datediff(current_date,date_format(odate,'%Y-%m-%d'))=0  order  by orderid desc";
                    $stmt=$pdo->query($sql);
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {              
             ?>   
                        <p style="font-size:25px;">
                            your order id is <?=$row['orderid']?>   <a href="invoice.php?id=<?=$row['orderid']?>">invoice</a>  
                        <br><br>
                        </p>
                        <p style="font-size:25px;"> & you will receive an email of orderid </p> 
                        <br>
                        <div class="content">
                            <div class="row">
                                    <div class="col-12 col-md-10 hh-grayBox pt45 pb20">
                                        <div class="row justify-content-between" style="display: flex; flex: column">
                                            <?php
                                                
                                                if($row['status']==2)
                                                    echo '<div class="order-tracking" >';
                                                else 
                                                    echo '<div class="order-tracking completed" >';
                                            ?>
                                             
                                                <span class="is-complete"></span>
                                                <p>Ordered<br><span></span></p>
                                            </div>
                                            <?php
                                                if($row['status']==2)
                                                    echo "<p style='font-size:25px;color:red;font-weight:bold;z-index:100'>YOUR ORDER IS REJECTED</p>";
                                                    
                                                else if($row['status']==5)
                                                
                                                echo "<p style='font-size:25px;color:red;font-weight:bold;z-index:100'>YOUR ORDER IS CANCELLED</p>";
                                                     
                                            ?>
                                            <?php
                                             
                                                if($row['status']==5)
                                                    echo '<div class="order-tracking " >';
                                                else if($row['status']>=3)
                                                    echo '<div class="order-tracking  completed" >';
                                               
                                                else 
                                                    echo '<div class="order-tracking " >';
                                            ?>
                                            
                                                <span class="is-complete"></span>
                                                <p>COOKED<br><span></span></p>
                                            </div>
                                            <?php
                                                if($row['status']==5)
                                                    echo '<div class="order-tracking " >';
                                                else if($row['status']>=4)
                                                    echo '<div class="order-tracking  completed" >';
                                                else 
                                                    echo '<div class="order-tracking " >';
                                            ?>
                                                <span class="is-complete"></span>
                                                <p>PICKED UP<br><span></span></p>
                                               
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <br> <br> <br>
                            <form method="post" action="trackorder.php">
                                <input type="hidden" name="orderid" value="<?=$row['orderid']?> "/>
                                <p style= "font size: 20px; text-align: center"> 
                                <button name="cancel" value="cancel" class="cancel"> <b> CANCEL </b>
                                </button> <br> (Your order can be cancelled) </p>
                            </form>
                        </div>
                        <div class="contact-us" >
                            <p> <center>Do you have	any queries? Please <a href="https://contact_us.com">contact_us</a> </center> </p>
                        </div>
            <?php
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
        <footer>
            <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
            <p1>follow us on</p1>
            <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
            <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
        </footer>
     </body>
</html>