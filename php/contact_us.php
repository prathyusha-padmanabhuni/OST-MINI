<?php
	session_start();
?>
<!DOCTYPE html>
<html>
     <head>
         <title>ANITS E-CANTEEN | contact_us</title>
         <link rel="stylesheet" type="text/css" href="stylecss/contact_us.css">
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
                    <li ><a href="about_us.php">about_us</a></li>
                    <!-- <li><a href="contact_us.html"> contact_us</a></li>
                    <li><a href="l2.html">Register</a></li>
                    <li><a href="MENU.html">MENU</a></li> -->
                    </ul>
                </nav>
            </div>
        </header>
        <div class="container2" style="min-height: 500px;" >
            <div style="text-align:center">
                  <h2>Contact Us /</h2>
                  <p> leave us a message:</p>
            </div>
            <div class="row">
                <div class="column">
                <table>
                    <form  method="post" action="contact_us.php">
                       <!-- <tr>
                           <th><label for="fname">complaint:</label></th>
                           <th><input type="text" id="fname"   placeholder="please share your complaint here"></th>
                       </tr> -->
                       <!-- <tr>
                            <th><label for="lname">Last Name</label></th>
                            <th><input type="text" id="lname"   placeholder="enter Your last name.."></th>
                       </tr>
                       <tr>
                            <th><label for="country">Country</label></th>
                            <th><select id="country" name="country">
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                                <option value="India">India</option>
                              </select></th>
                        </tr> -->
                        
                        <tr>
                            <th><label for="subject">complaint:</label></th>
                            <th><textarea id="subject" placeholder="Write something.." style="height:170px;width:350px" name="comp"></textarea></th>
                            
                        </tr>
                        <tr>  
                            <th></th>  
                            <th id="id1" style="color:red;font-weight:bold"></th>
                        </tr>
                        <tr>
                            <th></th>
                            <th><input type="submit" value="SUBMIT" name="submit" style="background-color:orange;"></th>
                        </tr>
                        
                    </form>
                    
                </table>
                </div>
            </div>
        </div>
        <?php 
	        require_once "pdo.php";
            if( isset($_SESSION['username']))
            {
                if(isset($_POST['submit'])  )
                {
                    $new_str = str_replace(' ', '', $_POST['comp']);
                    echo  $new_str ;
                    
                    if (strlen($new_str)==0 )
                        {
                                echo "<script> 
                            document.getElementById('id1').innerHTML = 'please enter something ...'
                            </script>";
                        }
                    $user=$_SESSION['username'];
                    $sql="insert into complaint(customerid,compdesc) values(:cusid,:desc)";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute(array(':cusid'=>$user ,':desc'=> $_POST['comp'] ));
                    // $row=$stmt->fetch(PDO::FETCH_ASSOC);
                    // $fname=$_POST['fname'];
                    // $mail1=$_POST['email'];
                    

                    
                }
            }
            else
            {
                echo "<script> 
                        document.getElementById('id1').innerHTML = 'please signup or login ...'
                        </script>";
            }
        ?>
        <footer>
            <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
            <p1>follow us on</p1>
            <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
            <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
        </footer>
     </body>
</html>