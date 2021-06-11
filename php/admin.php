<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANITS E-CANTEEN || ADMIN </title>
    <link rel="stylesheet"  href="stylecss/admin.css">
    
</head> 
<body > 
    <header>
        <div class="container">
            <div id="branding">
                <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
            </div>
            <nav>
                <ul>
                    <li><a href="admin.php">ADMIN</a></li>
                    <li><a href="homepage.php">HOME</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="orders.php">ORDERS</a></li>
                    <li><a href="homepage.php">LOGOUT</a></li>
                    
                 </ul>
            </nav>
        </div>
    </header>  
    <div style="min-height: 500px; margin-top:-10%">
        <div class="sidebar">
        <nav>
            <ul >
                
                    <li><a href="#">Manage Items</a>
                            <ul class="sidebar1">
                                <li><a href="admitemadd.php">Add Items</a></li>
                                <li><a href="admitemaddqty.php">Add qty</a></li>
                                <li><a href="admitemdel.php">Delete Items</a></li>
                                <li><a href="admitemview.php">View Items</a></li>
                            </ul>
                    </li>
                    <li><a href="#">Manage Orders</a>
                            <ul class="sidebar1">
                                <li><a href="admordview.php"> VIEW ORD</a></li>
                                <li><a href="admordrecv.php"> RECIVED</a></li>
                                <li><a href="admordrejct.php">REJECTED</a></li>
                                <li><a href="admorddlvr.php">DELIVERED</a></li>
                            </ul>
                        </li>
                    <li><a href="#">COMPLAINTS</a>
                            <ul class="sidebar1">
                                <li><a href="admcomplaint.php">RECIVED</a></li>
                                <li><a href="admcmpview.php">VIEW ALL</a></li>
                                <li><a href="admcmppedng.php">PENDING</a></li>
                            </ul>
                        </li>
                     <li>
                        <a href="statistics.html">stats</a>
                     </li>
                
            </ul>
        </nav>
        </div>
        
        <div class="dashboard">
            <?php
                session_start();
                require_once "pdo.php";
            ?>
            <h2 >DASHBOARD</h2>
            <?php
                $sql = "SELECT COUNT(*) FROM menu";
                $res = $pdo->query($sql);
                $count = $res->fetchColumn();
            ?>
            <h3 id="dashboard1" >ITEMS<br><br><br> <p style="font-size:30px"><?=  $count ?> </p></h3>
            <?php
                $sql = "SELECT COUNT(*) FROM orderp";
                $res = $pdo->query($sql);
                $count = $res->fetchColumn();
            ?>
            <h3 id="dashboard2">ORDERS<br><br><br><p style="font-size:30px"><?=  $count ?></p></h3>
            <?php
                $sql = "SELECT COUNT(*) FROM orderp group by customerid";
                $res = $pdo->query($sql);
                $count = $res->fetchColumn();
            ?>
            <h3 id="dashboard3">CLIENTS<br><br><br><p style="font-size:30px"><?=  $count ?></p></h3>
            <?php
                $sql = "SELECT COUNT(*) FROM complaint";
                $res = $pdo->query($sql);
                $count = $res->fetchColumn();
            ?>
            <h3 id="dashboard4">COMPLAINTS<br><br><br><p style="font-size:30px"><?=  $count ?></p></h3>
        </div>
    </div>

    <footer>
        <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
        <p1>follow us on</p1>
        <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
        <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
    </footer>
</body>
</html>
