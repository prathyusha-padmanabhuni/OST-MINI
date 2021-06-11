<!DOCTYPE html>
<?php
    session_start();
?>
<html>
     <head>
         <title>ANITS E-CANTEEN | complaint</title>
         <link rel="stylesheet" type="text/css" href="stylecss/admcomplaint.css">
     </head>
     <body>
        <header>
            <div class="container">
                <div id="branding">
                    <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
                </div>
                <nav>
                    <ul>
                    <li ><a href="homepage.php">HOME</a></li>
                    <li ><a href="profile.php">BACK</a></li>
                    <li><a href="favourite.php"> favourites</a></li>
                    <li><a href="cart.php">cart</a></li>
                    <li><a href="profile.php">profile</a></li>
                    </ul>
                </nav>
            </div>
        </header>
            <div style="min-height: 500px;">
	      
                <table class="center" style="width:75%">
                <tr>
                    <th>DATE </th>
                    
                    <!-- <th>CUSTOMER NAME </th> -->
                    <th>COMPLAINT INFO</th>
                    <th>STATUS</th>
                    <th>REASON</th>
                </tr>
                <?php
                            require_once "pdo.php";
                            try{
                                if(isset($_SESSION['username']))
                                {
                                    $user=$_SESSION['username'];
                                    $sql="select * from complaint where customerid=$user order by date desc";
                                    $stmt=$pdo->query($sql);
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                        $comp="";
                                        ?>
                                            
                                            <tr>
                                            <td> <?=$row['date']?></td>
                                            <td> <?=$row['compdesc']?> </td>
                                            <?php
                                                        if($row['status']==0)
                                                            echo '<td style="color:gray;font-weight:bold;font-size:20px">',"PROGRESS...",'</td>';
                                                        else if($row['status']==1) 
                                                            echo '<td style="color:black;font-weight:bold;font-size:20px">',"ACCEPTED",'</td>';
                                                        else if($row['status']==2)
                                                            echo '<td style="color:red;font-weight:bold;font-size:20px">',"REJECTED",'</td>';
                                                        else if($row['status']==3)
                                                            echo '<td style="color:green;font-weight:bold;font-size:20px">',"DONE",'</td>';

                                                       
                                                ?>
                                             
                                            <?php
                                                if($row['status']==2)
                                                    $comp="it is rejected due to our terms & conditions";
                                                else if($row['status']==3)
                                                    $comp="your complaint is solved by our team";
                                                else
                                                    $comp="--------";
                                            ?>
                                            <td > <?=$comp?> </td>
                                        </tr>
                                <?php }
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
