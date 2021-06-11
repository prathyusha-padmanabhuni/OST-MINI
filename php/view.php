<!DOCTYPE html>
<?php
session_start();
require_once "pdo.php";
?>
<html>
    <head>
    </head>
    <body>
        <?php
            $user=$_SESSION['username'];
            $sql="select * from customer where customerid=$user";
            $stmt=$pdo->query($sql);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            {?>
                <div>
                    <img src="uploads/<?=$row['photo']?>">
                </div>
            
      <?php } ?>
    </body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     