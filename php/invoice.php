<!DOCTYPE html>
<?php
	session_start();
	require_once "pdo.php";
?>
<html>
     <head>
	<meta charset="utf-8">
         <title>ANITS E-CANTEEN | invoice</title>
         <link rel="stylesheet" type="text/css" href="stylecss/invoice.css">

	 
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

	
        <div style="min-height: 500px;">
				<p>
					<br>
				</p>

				<h2>Invoice</h2>
				<address style="margin-top:3%;margin-left:5%,">
					<p> <b><?= $_SESSION['username'] ?></b> </p>
					 
					<p>Invoice no:  <?=$_GET['id'] ?></p>
				</address>
				
				<article>
					<h1>Recipient</h1>
				
			
						<table class="inventory" style="margin-left:15%;margin-top:5%">
							<thead>
								<tr>
									<th><span >Item</span></th>
									<th><span >Description</span></th>
									<th><span >Rate</span></th>
									<th><span >Quantity</span></th>
									<th><span >Price</span></th>
								</tr>
							</thead>
							<tbody>
							<?php
								$cost=0;
								$sql2="select * from orderc where orderid=:ord ";
								$stmt2=$pdo->prepare($sql2);
								$stmt2->execute(array(':ord'=>$_GET["id"]));
								while($row2=$stmt2->fetch(PDO::FETCH_ASSOC))
								{
									$sql3="select * from menu where itemid=:itm";
									$stmt3=$pdo->prepare($sql3);
									$stmt3->execute(array(':itm'=>$row2['itemid']));
									$row3=$stmt3->fetch(PDO::FETCH_ASSOC);
									 ?>
							
								<tr>
									<td><span ><?=$row3['iname']?></span></td>
									<td><span ><?= $row3['descr'] ?></span></td>
									<td><span data-prefix>Rs</span><span ><?= $row3['cost'] ?></span></td>
									<td><span ><?= $row2['quant'] ?></span></td>
									<?php $cost=$cost+$row3['cost']*$row2['quant']; ?>
									<td><span data-prefix>Rs</span><span><?= $row3['cost']*$row2['quant'] ?> </span></td>
								</tr>
								<?php
									}
								?>
							</tbody>
						</table>
						
						<table class="balance">
							<tr>
								<th><span >Total</span></th>
								<td><span data-prefix>Rs</span><span><?= $cost?></span></td>
							</tr>
							
						</table>
				</article>
    	</div>
        <footer>
            <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
            <p1>follow us on</p1>
            <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
            <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
        </footer>
     </body>
</html>