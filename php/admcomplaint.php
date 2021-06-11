 <?php
     	session_start();
	 	require_once "pdo.php";
    	if(isset($_POST['accept'])) 
        {
			$user=$_POST['userid'];
			echo "1";
			$sql="update `complaint` set status=:stat where complaintid=$user";
			$stmt=$pdo->prepare($sql);
			$stmt->execute(array(':stat'=>'1'));
		}
		if(isset($_POST['reject'])) 
		{
			$user=$_POST['userid'];
			echo "2";
			$sql="update `complaint` set status=:stat where complaintid=$user";
			$stmt=$pdo->prepare($sql);
			$stmt->execute(array(':stat'=>'2'));
		}
 ?>
<!DOCTYPE html>
<html>
     <head>
         <title>E-CANTEEN|admcomplaint</title>
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
                      <li><a href="admitemview.php">ITEM VIEW</a></li>
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
                
                    <li><a href="admcmpview.php" >VIEW COMP</a>
                    </li>
                    <li><a href="admcmppedng.php">PENDING</a>
                    </li>
            </ul>
        </nav>
        </div>
        
			<table class="center" style="width:75%">
				<tr>
					<th>DATE</th>
					<th>CUSTOMER ID </th>
					<th>COMPLAINT ID </th>
					<th>COMPLAINT DESC</th>
					<th>ACCEPTED/REJECTED</th>
				</tr>
				
				<?php
						require_once "pdo.php";
						try{
							if(isset($_SESSION['username']))
							{
								$sql="select * from complaint where status=0 order by date desc";
								$stmt=$pdo->query($sql);
								while($row=$stmt->fetch(PDO::FETCH_ASSOC))
								{
									$comp="";
									?>
										
										<tr>
											<td> <?=$row['date']?></td>
											<td> <?=$row['customerid']?></td>
											<td> <?=$row['complaintid']?></td>
											<td> <?=$row['compdesc']?> </td>
											<td><form method="post" action="admcomplaint.php">
												<input type="hidden"   value="<?=$row['complaintid']?>" name="userid"/>
												 
												<input type="submit"  class="accept" value="accept" name="accept"/>&nbsp &nbsp
												<input type="submit"  class="reject" value="reject" name="reject"/></form>
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
							echo "<h6>internal error</h6>";
											
						}
					?>
     
    
    <!--onclick="window.location='admcomplaint.php'" <td> <button class="button accept" onclick="admcmppedng.php">accept </button> &nbsp <button class="button reject">reject </button>  </td> -->

  
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