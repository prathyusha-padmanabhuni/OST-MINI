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
                <li id="track" ><a href="trackorder.html"> TRACK</a></li>
                <nav>
                    
                    <ul>
                    
                    <li ><a href="homepage.php">Home</a></li>
                    <!-- <li ><a href="#">menu</a></li> -->
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
                    <!-- <li><a href="profile.html">profile</a></li>  -->
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
                    
                        <div class="tiffin">
                            <div class="carousel-inner">
                                <span class="wish-icon"  style="z-index:3"><i class="fa fa-heart-o"></i></span>    
                                <div class="product-image">
                                    <img src="images/manchuriyajpg.jpg" width=50%>
                                <div class="info">
                                    <h2>The Description</h2>
                                    <ul>
                                        <li><strong>Quantity: </strong>2</li>
                                    </ul>
                                </div>
                                </div>
                            <button class="button display-left" >-</button>
                            <button class="button display-right" >+</button>
                                    
                                    <h3 style="font-family: 'Farsan', cursive;"><center>qty:1</center></h3>
                                    <h3 style=" float:left; font-family: 'Farsan', cursive; margin-left: 5%; margin-top: 3%">MACHURIYA</h3>
                                    <h4 style="padding-left: 10%; font-family: 'Farsan', cursive; float:right; margin-right: 5%; margin-top: 3%"> 150</h4>
                                    <input style=" float:left; font-family: 'Farsan', cursive; margin-left: 35%; margin-top: 3%" type="submit" value="ADD TO CART">
                                    <h4 style="float:right; padding-right: 5%; font-family: 'Farsan', cursive; margin-top: 3%">N/A</h4>
                 
                            </div>
                        </div> 
                        <div class="tiffin">
                            <div class="carousel-inner">
                                <span class="wish-icon"  style="z-index:3"><i class="fa fa-heart-o"></i></span>    
                                <div class="product-image">
                                    <img src="images/manchuriyajpg.jpg" width=50%>
                                <div class="info">
                                    <h2>The Description</h2>
                                    <ul>
                                        <li><strong>Quantity: </strong>2</li>
                                    </ul>
                                </div>
                                </div>
                            <button class="button display-left" >-</button>
                            <button class="button display-right" >+</button>
                                    
                                    <h3 style="font-family: 'Farsan', cursive;"><center>qty:1</center></h3>
                                    <h3 style=" float:left; font-family: 'Farsan', cursive; margin-left: 5%; margin-top: 3%">MACHURIYA</h3>
                                    <h4 style="padding-left: 10%; font-family: 'Farsan', cursive; float:right; margin-right: 5%; margin-top: 3%"> 150</h4>
                                    <input style=" float:left; font-family: 'Farsan', cursive; margin-left: 35%; margin-top: 3%" type="submit" value="ADD TO CART">
                                    <h4 style="float:right; padding-right: 5%; font-family: 'Farsan', cursive; margin-top: 3%">N/A</h4>
                 
                            </div>
                        </div> 
                        <div class="tiffin">
                            <div class="carousel-inner">
                                <span class="wish-icon"  style="z-index:3"><i class="fa fa-heart-o"></i></span>    
                                <div class="product-image">
                                    <img src="images/manchuriyajpg.jpg" width=50%>
                                <div class="info">
                                    <h2>The Description</h2>
                                    <ul>
                                        <li><strong>Quantity: </strong>2</li>
                                    </ul>
                                </div>
                                </div>
                            <button class="button display-left" >-</button>
                            <button class="button display-right" >+</button>
                                    
                                    <h3 style="font-family: 'Farsan', cursive;"><center>qty:1</center></h3>
                                    <h3 style=" float:left; font-family: 'Farsan', cursive; margin-left: 5%; margin-top: 3%">MACHURIYA</h3>
                                    <h4 style="padding-left: 10%; font-family: 'Farsan', cursive; float:right; margin-right: 5%; margin-top: 3%"> 150</h4>
                                    <input style=" float:left; font-family: 'Farsan', cursive; margin-left: 35%; margin-top: 3%" type="submit" value="ADD TO CART">
                                    <h4 style="float:right; padding-right: 5%; font-family: 'Farsan', cursive; margin-top: 3%">N/A</h4>
                 
                            </div>
                        </div>
                   
                        <div class="tiffin">
                            <div class="carousel-inner">
                                <span class="wish-icon"  style="z-index:3"><i class="fa fa-heart-o"></i></span>    
                                <div class="product-image">
                                    <img src="images/manchuriyajpg.jpg" width=50%>
                                <div class="info">
                                    <h2>The Description</h2>
                                    <ul>
                                        <li><strong>Quantity: </strong>2</li>
                                    </ul>
                                </div>
                                </div>
                                
                                    <button class="button display-left" >-</button>
                                    <button class="button display-right" >+</button>
                                    
                                    <h3 style="font-family: 'Farsan', cursive;"><center>qty:1</center></h3>
                                    <h3 style=" float:left; font-family: 'Farsan', cursive; margin-left: 5%; margin-top: 3%">MACHURIYA</h3>
                                    <h4 style="padding-left: 10%; font-family: 'Farsan', cursive; float:right; margin-right: 5%; margin-top: 3%"> 150</h4>
                                    <input style=" float:left; font-family: 'Farsan', cursive; margin-left: 35%; margin-top: 3%" type="submit" value="ADD TO CART">
                                    <h4 style="float:right; padding-right: 5%; font-family: 'Farsan', cursive; margin-top: 3%">N/A</h4>
                            
                 
                            </div>
                        </div>
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
                ?>
             <div id="children">
              <ul> 
                <li>
                    <div id="TIFFIN" class="children" > 
                        <p>TIFFIN</p>   
                            <?php  
                                $sql="select * from menu where category='TIFFIN' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                </li>
                 <li>
                 <div id="MEALS"  class="children" > 
                    <p>MEALS</p>
                    <?php  
                                $sql="select * from menu where category='MEALS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <div class="quantity">
                                                <button class="button display-left disabled" type="button"  >-</button>
                                                <input type="text" id="qty1" value="1"  />
                                                <button class="button display-right" type="button" >+</button>            
                                            </div>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                     
                 </div>
                </li>
                <li>
                 <div id="SNACKS" class="children" > 
                    <p>SNACKS</p>
                    <?php  
                                $sql="select * from menu where category='SNACKS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                 </div>
                </li>
                <li>
                 <div id="DINNER" class="children"  > 
                     <p>DINNER</p>
                     <?php  
                                $sql="select * from menu where category='DINNER' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                 </div>
                </li>
                <li>
                 <div id="BIRYANIS"  class="children" >
                    <p> BIRYANIS</p>
                    <?php  
                                $sql="select * from menu where category='BIRYANIS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                </li>
                <li> 
                 <div id="ICECREAM" class="children"  >
                     <p>ICECREAMS</p>
                     <?php  
                                $sql="select * from menu where category='ICECREAM' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                </li>
                <li> 
                 <div id="DRINKS"  class="children" >
                     <p>DRINKS</p>
                     <?php  
                                $sql="select * from menu where category='DRINKS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                </li>
                <li> 
                 <div id="CHOCOLATES" class="children"  >
                     <p>CHOCOLATES</p>
                     <?php  
                                $sql="select * from menu where category='CHOCOLATES' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                </li>
                <li> 
                 <div id="PASTRYS" class="children"  >
                     <p>PASTRYS</p>
                     <?php  
                                $sql="select * from menu where category='PASTRYS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                 </li>

               </ul>

              </div>
             </div>

             <div class="quantity">
                                                <button  type="button" class="button disabled display-lef"  >-</button>
                                                <input type="text" id="qty2" value="1"  >
                                                <button  type="button" class="button display-righ"  >+</button>            
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
               echo "<h6>internal error</h6>";
                               
            }
            ?>
        <script>
            document.querySelector(".display-lef").setAttribute("disabled","disabled");
            var valcount;
            document.querySelector(".display-righ").addEventListener("click",function()
            {
                valcount=document.getElementById("qty2").value;
                valcount++;
                document.getElementById("qty2").value=valcount;
                if(valcount>1)
                {
                    document.querySelector(".display-lef").removeAttribute("disabled");
                    document.querySelector(".display-lef").classList.remove("disabled");
                }
            }
            )
            document.querySelector(".display-lef").addEventListener("click",function()
            {
                valcount=document.getElementById("qty2").value;
                valcount--;
                document.getElementById("qty2").value=valcount;
                if(valcount==1)
                {
                    document.querySelector(".display-lef").setAttribute("disabled","disabled");
                }
            }
            );
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

            
                // var par=document.getElementsByClassName('tiffin');
                // var child=document.getElementById('tiffin');
                // for (i=0;i<child.length();i++)
                // {
                //     var dl=mytable.getElementsByClassName('display-left'); 
                //     var dr=mytable.getElementsByClassName('display-right'); 
                // }
                
                 

                // var quan = 0;
                // showDivs(quan);
                
                // function change(n) {
                //     showDivs(quan += n);
                // }

                // function showDivs(n) {
                //     var x = $("#qty").text(function(){if(n<0)return 0; else return n;});
                // }
         
            </script>
        <footer>
            <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
            <p1>follow us on</p1>
            <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
            <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
        </footer>
     </body>
</html>




<li>
                 <div id="MEALS"  class="children" > 
                    <p>MEALS</p>
                    <?php  
                                $sql="select * from menu where category='MEALS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <div class="quantity">
                                                <button class="button display-left disabled" type="button"  >-</button>
                                                <input type="text" id="qty1" value="1"  />
                                                <button class="button display-right" type="button" >+</button>            
                                            </div>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                     
                 </div>
                </li>
                <li>
                 <div id="SNACKS" class="children" > 
                    <p>SNACKS</p>
                    <?php  
                                $sql="select * from menu where category='SNACKS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                 </div>
                </li>
                <li>
                 <div id="DINNER" class="children"  > 
                     <p>DINNER</p>
                     <?php  
                                $sql="select * from menu where category='DINNER' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                 </div>
                </li>
                <li>
                 <div id="BIRYANIS"  class="children" >
                    <p> BIRYANIS</p>
                    <?php  
                                $sql="select * from menu where category='BIRYANIS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                </li>
                <li> 
                 <div id="ICECREAM" class="children"  >
                     <p>ICECREAMS</p>
                     <?php  
                                $sql="select * from menu where category='ICECREAM' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                </li>
                <li> 
                 <div id="DRINKS"  class="children" >
                     <p>DRINKS</p>
                     <?php  
                                $sql="select * from menu where category='DRINKS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                </li>
                <li> 
                 <div id="CHOCOLATES" class="children"  >
                     <p>CHOCOLATES</p>
                     <?php  
                                $sql="select * from menu where category='CHOCOLATES' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                </li>
                <li> 
                 <div id="PASTRYS" class="children"  >
                     <p>PASTRYS</p>
                     <?php  
                                $sql="select * from menu where category='PASTRYS' order by itemid";
                                $stmt=$pdo->query($sql);
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
                                                        <h5><?=$row['descr']?></h5>
                                                        <ul>
                                                            <li><strong>Quantity: </strong>2</li>
                                                        </ul>
                                                    </div>
                                            </div>
                                            <button class="button display-left" onclick="change(-1)">-</button>
                                            <button class="button display-right" onclick="change(1)">+</button>            
                                            <p id="qty" style="margin-left: 45%;"><center></center></p>
                                            <h3><?=strtolower($row['iname'])?></h3>
                                            <h4 ><?=$row['cost']?></h4>
                                            <br>
                                            <input   type="submit" value="ADD TO CART">
                                            <h5 >N/A</h5>   
                                        </div>
                                    </div>               
                                <?php }
                                   
                            ?>
                    </div>
                 </li>