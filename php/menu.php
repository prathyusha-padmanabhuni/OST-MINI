<!DOCTYPE html>
<?php
    session_start();
    require_once "pdo.php";
    
?>
<html>
     <head>
         <title>ANITS E-CANTEEN | MENU</title>
         <link rel="stylesheet" type="text/css" href="stylecss/menu.css">
         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>
     <body>
        <div id="nav" class="fix">
        <header>
            <div class="container">
                <div id="branding">
                    <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
                </div>
                <li id="track" ><a href="trackorder.php"> TRACK</a></li>
                <nav>
                    
                    <ul>
                    
                    <li ><a href="homepage.php">Home</a></li>
                     
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">CATEGORIES</button>
                            <div class="dropdown-content">
                            <a href="#">VEG</a>
                            <a href="#">NON_VEG</a>
                            </div>
                        </div>
                    </li>
                    <li><a href="favourites.php"> favourites</a></li>
                    <li><a href="cart.php">cart</a></li>
                    <li>
                        <div class="dropdown" >
                            <button class="dropbtn">PROFILE</button>
                            <div class="dropdown-content">
                            <a href="profile.php">VIEW</a>
                            <a href="logout.php">LogOut</a>
                            </div>
                        </div>
                    </li>
                    
                    </ul>
                </nav>
            </div>
        </header>
        </div>
        <div style="float: right ;text-decoration: none;">
            <a href="menu.html">block</a>
            <a href="menu1.html">side</a>
        </div>
         <div  style="border:10px solid black;padding-top: 100px; min-height: 250px;">
         
            <h3>RECOMMONDATIONS FOR YOU</h3>
            <?php  
                 $sql="select * from menu where itemid>=:item1 and itemid<=:item2";
                 $stmt=$pdo->prepare($sql);
                  $stmt->execute(array(':item1'=>'10001',':item2'=>'10005'));
                    $var=0;                         
                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $cmp="";
                            ?>
                            <div class="tiffin">
                                <div class="carousel-inner">
                                    <span class="wish-icon"  style="z-index:3"><i class="fa fa-heart-o"  ></i></span>   
                                    <div class="product-image">
                                        <img src=<?='menu/'.$row['iphoto']?> >
                                        <div class="info">
                                            <h5 style="margin-top:15px;padding-left:3px"><?=$row['descr']?></h5> 
                                            <h6>Quantity: 2</h6> 
                                        </div>
                                    </div>
                                    <form method="post" action="menuphp.php" >  
                                        <div class="quantity">
                                            <div class="display-left button"   >-</div>
                                            <input type="text" name="qty" id=<?=$var?> value="0"  />
                                            <div class="display-right button"   >+</div>            
                                        </div>
                                        <div>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                        </div>
                                        <div>
                                            <input type="hidden" name="item" value="<?=$row['itemid']?>">
                                            <input   type="submit" name="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </form>
                                </div>
                            </div>               
                    <?php 
                        $var=$var+1;   
                        }    
                    ?>                  
        </div>
        <div style="border:1px solid black;"></div>
        <div id="family"> 
            <div id="parent" class="fix"  >
                <a href="#" style="color:white;font-weight:bold">MENU</a>
                <a href="#TIFFIN">TIFFIN</a>
                <a href="#MEALS">MEALS</a>
                <a href="#SNACKS">SNACKS</a>
                <a href="#DINNER">DINNER</a>
                <a href="#BIRYANIS">BIRYANIS</a>
                <a href="#ICECREAM">ICECREAMS</a>
                <a href="#DRINKS">DRINKS</a>
                <a href="#CHOCOLATES">CHOCOLATES</a>
                <a href="#PASTRYS">PASTRYS</a>
            </div>
            <?php
                try{
                    if(isset($_SESSION['username']))
                    {
                        $items=array("TIFFIN","MEALS","SNACKS","DINNER","BIRYANIS","ICECREAM","DRINKS","CHOCOLATES","PASTRYS");
                        $n=count($items);
                        // $var=0;
                ?>
            <div id="children">
              <ul> 
                 
                  <?php
                     
                     for ($i=0; $i<$n; $i++)
                     {
                         ?>
                            <!-- echo $items[$i]; -->
                            <li>
                                <div id=<?=$items[$i]?> class="children" > 
                                    <p><?=$items[$i]?></p>   
                                        <?php  
                                            $sql="select * from menu where category=:cat order by itemid";
                                            $stmt=$pdo->prepare($sql);
                                            $stmt->execute(array(':cat'=>$items[$i]));
                                            // $stmt=$pdo->query($sql);
                                            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                            {
                                                $cmp="";
                                                ?>
                                                <div class="tiffin">
                                                    <div class="carousel-inner">
                                                        <span class="wish-icon"  style="z-index:3"><i class="fa fa-heart-o"  ></i></span>   
                                                        <div class="product-image">
                                                            <img src=<?='menu/'.$row['iphoto']?> >
                                                                <div class="info">
                                                                    <h5 style="margin-top:15px;padding-left:3px"><?=$row['descr']?></h5> 
                                                                    <h6>Quantity: 2</h6> 
                                                                </div>
                                                        </div>
                                                        <form method="post" action="menuphp.php" >  
                                                            <div class="quantity">
                                                                <div class="display-left button"   >-</div>
                                                                <input type="text" name="qty" id=<?=$var?> value="0"  />
                                                                <div class="display-right button"   >+</div>            
                                                            </div>
                                                            <div>
                                                                <h3><?=strtolower($row['iname'])?></h3>
                                                                <h4 ><?=$row['cost']?></h4>
                                                            </div>
                                                            <div>
                                                                <input type="hidden" name="item" value="<?=$row['itemid']?>">
                                                                <input   type="submit" name="submit" value="ADD TO CART">
                                                                <h5 >N/A</h5>   
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>               
                                        <?php 
                                            $var=$var+1;   
                                                }    
                                        ?>
                                </div>
                            </li>
                        <?php
                                  }
                        ?>
                        
                        </div> 
                    
                 </ul>  
             
             </div>
            <?php
               }
               else
               {
                   echo '<p style="font-size:30px ; overflow:hidden"> login/signup </p>';
               }
            }
            catch(Exception $ex)
            {
               echo "<h6>internal error</h6>".$ex;
                               
            }
            ?>
              
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
        <footer>
            <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
            <p1>follow us on</p1>
            <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
            <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
        </footer>
     </body>
</html>