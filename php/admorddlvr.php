<!DOCTYPE html>
<?php
  session_start();
  require_once "pdo.php";
    	if(isset($_POST['deliver'])) 
      {
          $user=$_POST['orderid'];
          
          $sql="update `orderp` set status=:stat where orderid=$user";
          $stmt=$pdo->prepare($sql);
          $stmt->execute(array(':stat'=>'4'));
		  }
		 
?>
<html>
     <head>
         <title>E-CANTEEN|orddlvr</title>
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
                      <li ><a href="admin.php">BACK</a></li>
                      <li><a href="admcmpview.php">CMP VIEW</a></li>
                      <li><a href="admitemview">ITEM VIEW</a></li>
                      <li><a href="profile.php">profile</a></li>
             </ul>
                </nav>
            </div>
        </header>
        <div style="min-height: 500px;">
	    <div class="sidebar margin_top:10%">
        <nav>
            <ul >
                
                    <li><a href="admorddlvr.php">DELIVERED</a>
                    </li>
                    <li><a href="admordrejct.php">REJECTED</a>
                    </li>
                    <li><a href="admordview.php">ORD VIEW</a>
                    </li>
                    <li><a href="admordrecv.php">ORD RECV</a>
                    </li>
            </ul>
        </nav>
        </div>
        
<table class="center" style="width:75%;margin-top:-25% ">
    <tr>
      <th>ORDER-ID</th>
      <th>CUSTOMER-ID</th>
      <th>ITEMS</th>
      <!-- <th>COMPLAINT DESC</th> -->
      <th>DONE/REJECT</th>
    </tr>
    <?php
						require_once "pdo.php";
						try{
							if(isset($_SESSION['username']))
							{
								$sql="select * from orderp where status=3 order by orderid desc";
								$stmt=$pdo->query($sql);
								while($row=$stmt->fetch(PDO::FETCH_ASSOC))
								{
									 $cmp="";
									?>
										
										<tr>
											<td> <?=$row['orderid']?></td>
											<td> <?=$row['customerid']?></td>
                      <td>
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
                       </td>
											 <td>
                          <form method="post" action="admorddlvr.php">
												  <input type="hidden"   value="<?=$row['orderid']?>" name="orderid"/>
												 
												  <input type="submit"  class="accept" value="deliver" name="deliver"/>&nbsp &nbsp
												   </form>
                       </td>
                       
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
							echo $ex;
											
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



 