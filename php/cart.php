<!DOCTYPE html>
<?php
    session_start();
    require_once "pdo.php";
    if(isset($_POST["delete"]))
    {
        unset($_SESSION['cart'][$_POST["item"]]);
    }
    if(isset($_POST["checkout"]))
    {
       
        $com="";
        foreach($_SESSION['cart'] as $k=>$v)
        {
            $sql3="select * from menu where itemid=$k";
            $stmt3=$pdo->query($sql3);
            $row3=$stmt3->fetch(PDO::FETCH_ASSOC);
            if ($row3['requir'] < $v )
                $com=$com.$row3['iname']." ".$row3['requir']." "."are only available"."  ";
        }
         
        if($com=="")
        {
            $sq="select max(orderid) as maxi from orderp";
            $stm=$pdo->query($sq);
            $value=$stm->fetch(PDO::FETCH_ASSOC);
             
            $valu=$value['maxi']+1;
             
            $sql1="insert into orderp(customerid,orderid,status) values(:cusid,:ord,:st)";
            $stmt1=$pdo->prepare($sql1);
            $stmt1->execute(array(':cusid'=>$_SESSION['username'],':ord'=>$valu,':st'=>"1"));
            foreach($_SESSION['cart'] as $k=>$v)
            {
                
                $sql2="insert into orderc(orderid,itemid,quant) values(:ord,:item,:qt)";
                $stmt2=$pdo->prepare($sql2);
                $stmt2->execute(array(':ord'=>$valu,':item'=>$k,':qt'=>$v));


                $sql="update `menu` set  requir=requir-:req where itemid=:it";
                $stmt=$pdo->prepare($sql);
                $stmt->execute(array(':req'=>$v,':it'=>$k));

            }
            
            $user=$_SESSION['username'];
            $sql="select * from customer where customerid=$user";
            $stmt=$pdo->query($sql);
            $row=$stmt->fetch(PDO::FETCH_ASSOC);
            $mail1=$row['email'];
            $sub="E-CANTEEN";
            $msg="ORDERID :$valu
                    This is orderid to be used when u pick up food 
                        THANK YOU";
            mail($mail1,$sub,$msg);
            unset($_SESSION['cart']);
            header("Location:trackorder.php?orderid=$valu");
        }
        else
        {
		    echo  $com;
        }
        
        // echo "sucess fully ordered";
    }
    if(isset($_POST["dec"]) || isset($_POST["inc"]) )
    {
        // echo "1";
        // if(isset($_SESSION['cart']))
        // {
        //     if($_POST["qty"]==0)
        //         unset($_SESSION['cart'][$_POST["item1"]]);
        //     else
        //         $_SESSION['cart'][$_POST["item1"]]=$_POST["qty"];    
        // }
    }
?>
<html>
     <head>
         <title>ANITS E-CANTEEN | cart</title>
         <link rel="stylesheet" type="text/css" href="stylecss/cart.css">
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
                    <li ><a href="menu.php">Menu</a></li>
                    <li ><a href="cart.php">cart</a></li>
                    <li ><a href="trackorder.php">track</a></li>
                    <!-- <li><a href="contact_us.html"> contact_us</a></li>
                    <li><a href="l2.html">Register</a></li>
                    <li><a href="MENU.html">MENU</a></li> -->
                    </ul>
                </nav>
            </div>
        </header>
        <h1 style="text-align:center">fill ur cart & fill ur tummy</h1>
        <div class=parent style="min-height:800px">
            <?php
                // $c=count($_SESSION['cart']);
                
                $cost=0;
                $var=0;
                if(isset($_SESSION['cart']))
                {
                foreach($_SESSION['cart'] as $k=>$v)
                {
                   
                    $sql="select * from menu where itemid=$k";
                    $stmt=$pdo->query($sql);
                    $row=$stmt->fetch(PDO::FETCH_ASSOC);
                    $c=$row['cost'];
            ?>
                    <div  class=child2 >
                       
                        <div class=child21>
                            
                            <img src=<?='menu/'.$row['iphoto']?> >
                            <!-- <form method="post" action="cart.php"> 
                                <div class="quantity">
                                        <input type="submit" name="dec" value="dec" class="display-left"   ></input>
                                        <input type="hidden" name="item1" value="<?=$row['itemid']?>">
                                        <input type="text" name="qty" id=<?=$var?> value="<?= $v ?>"  />
                                        <input  type="submit" name="inc" value="inc" class="display-right"   ></input>            
                                </div>
                            </form> -->
                            <div class="quantity">
                                            <button class="display-left"    >-</button>
                                            <input type="text" name="qty" id=<?=$var?> value="<?= $v ?>"  />
                                            <button class="display-right"   >+</button>            
                            </div>
                           
                        </div >
                        <div class=child22>
                               <h2><?=strtolower($row['iname'])?></h2>      
                              
                                <h2>quantity: <?= $v?>  &nbsp &nbsp &nbsp cost:<?= $c?> </h2>
                                <h1>quantity cost : <?=$v*$c ?></h2>
                                <?php $cost=$cost+($v*$c);
                                    $var=$var+1;
                                ?> 
                        </div>
                        <div>
                            <form method="post" action="cart.php"> 
                            <input type="hidden" name="item" value="<?=$row['itemid']?>">
                            <input  type="submit" class="delete" name="delete" value="delete"> 
                            </form>
                        </div>
                        
                    </div>
            <?php
                }
            }
             
            ?>
           

            
                <form method="post" action="cart.php"> 
                    <h1 style="text-align: center;">total cost:<?=$cost?></h1> 
                    <div   style="margin-left: 45%;margin-bottom:15%">
                        <input type="submit" class="checkout" name="checkout" value="CHECKOUT"/>
                       
                    </div>
                </form> 
                <p id="comment"></p>
           
        </div>
         
        <footer>
            <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
            <p1>follow us on</p1>
            <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
            <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
        </footer>
        <script>
            var incrementButton=document.getElementsByClassName('display-right');
            var decrementButton=document.getElementsByClassName('display-left');
             
            for(var i=0;i<incrementButton.length;i++)
            {
                var button=incrementButton[i];
                button.addEventListener("click",function(event){
                        var buttonClicked = event.target;
                        var input = buttonClicked.parentElement.children[1];
                        var inputValue=input.value;
                        var newValue = parseInt(inputValue)+1;
                        input.value=newValue;
                        console.log(newValue);
                    }
                );
            }
            for(var i=0;i<decrementButton.length;i++)
            {
                var button= decrementButton[i];
                button.addEventListener("click",function(event){
                        var buttonClicked = event.target;
                        var input = buttonClicked.parentElement.children[1];
                        var inputValue=input.value;
                        var newValue = parseInt(inputValue)-1;
                        
                        if(newValue>=0)
                        {
                            input.value=newValue;
                        }
                        else
                        {
                            input.value=0;
                        }
                        console.log(newValue);
                    }
                );
            }
            window.onscroll = function() {myFunction()};
            
            var navbar =  document.getElementById("nav");
            var sticky = navbar.offsetTop;
            
            function myFunction() {
              if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
              } else {
                navbar.classList.remove("sticky");
              }
            }
                     
                $(document).ready(function(){
                $(".wish-icon i").click(function(){
                    $(this).toggleClass("fa-heart fa-heart-o");
                });
            });	
        </script>
     </body>
</html>