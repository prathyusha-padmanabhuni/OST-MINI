<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CANTEEN || itemview </title>
    <link rel="stylesheet"  href="stylecss/admitemview.css">



        
    
</head>   
<body >
    <header>
        <div class="container">
          <div id="branding">
            <h1><img src="images/anitslogo1.png"  width="100px" height ="70px" style="border-radius: 50%;vertical-align:middle;"><span class="highlight">e-canteen</span> ANITS </h1>
            
          </div>
          <nav>
          <ul>
                      <li ><a href="admin.php">BACK</a></li>
                      <li><a href="admcmpview.php">CMP VIEW</a></li>
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
                    <li><a href="admitemaddqty.php">ADD ITEM QTY</a>
                    </li>
                    <li><a href="admitemadd.php">ADD ITEM</a>
                    </li>
                    <li><a href="admitemdel.php">DEL ITEM</a>
                    </li>
            </ul>
        </nav>
        </div>
        <br>
                <div class="content">
                            <label><b> CATEGORIES: </b></label>
                            <select class="css-dropdowns" id="branch1" name="branch1"   onchange="filterfun1();" required>
                                <option value='select'>select</option>
                                <option value="vegi">veg</option>
                                <option value="nonveg">nonveg</option>
                            </select> &nbsp &nbsp &nbsp &nbsp &nbsp  
                            
                            <label><b> MENU: </b></label>
                            <select class="css-dropdowns" id="branch2" name="branch2"  onchange="filterfun2();" required>
                                    <option value="select">select</option>
                                    <option value="TIFFIN">TIFFIN</option>
                                    <option value="MEALS">MEALS</option>
                                    <option value="SNACKS">SNACKS</option>
                                    <option value="DINNER">DINNER</option>
                                    <option value="BIRYANIS">BIRYANIS</option>
                                    <option value="ICECREAM">ICECRREAM</option>
                                    <option value="DRINKS">DRINKS</option>
                                    <option value="CHOCOLATES">CHOCOLATES</option>
                                    <option value="PASTRYS">PASTRYS</option>
                                    <option value="TOSPL">TOSPL</option></select></td>
                            </select><br><br>
                            <input type="hidden" nmae=""/>
                 </div>
        
        <table  align="center" style="min-height: 400px;" id="mytable">
            <tr>
                <th>PHOTO</th>
                <th>ITEM ID</th>
                <th>ITEM NAME</th>
                <th>CATEGORY</th>
                <th>DESCRIPTION</th>
                <th>ITEM PRICE</th>
                <th>REQUIED</th>
                <th>COOK TIME</th>
                <th>o-c time</th>
                <th>RATING</th>
            </tr>
             
            <?php
						require_once "pdo.php";
						try{
							if(isset($_SESSION['username']))
							{
								$sql="select * from menu order by itemid";
								$stmt=$pdo->query($sql);
								while($row=$stmt->fetch(PDO::FETCH_ASSOC))
								{
									 $cmp="";
									?>
										<!-- "menu/'.$row['iphoto'].'" -->
										<tr>
											<td>   
                                                <img  style="width:50px; height:50px" src=<?='menu/'.$row['iphoto']?>>
                                            </td>
											<td> <?=$row['itemid']?></td>
                                            <td style="display:none" > <?=$row['typevorn']?></td>
                                            <td  style="display:none"> <?=$row['category']?></td>
											<td> <?=$row['iname']?></td>
											<td> <?=$row['typevorn']."-".$row['category']?> </td>
                                            <td> <?=$row['descr']?></td>
											<td> <?=$row['cost']?></td>
											<td> <?=$row['requir']?> </td>
                                            <td> <?=$row['ctime']?></td>
											<td> <?=$row['optim']."-".$row['clostim']?></td>
											<td> <?=$row['rating']?> </td>
                                                 
                      
                                                   
										
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

    <script>
                     const filterfun1=()=>{
                         var filter1=document.getElementById('branch1').value;
                          var mytable=document.getElementById('mytable');
                          var tr=mytable.getElementsByTagName('tr');
                          for(var i=1;i<tr.length;i++)
                          {
                              var td=tr[i].getElementsByTagName('td')[2];
                               
                              
                              if(td)
                              {
                                   var textvl=td.textContent||td.innerHTML;
                                   if (textvl.indexOf(filter1)>-1  ) 
                                            tr[i].style.display="";
                                   else
                                   
                                            tr[i].style.display="none";
                                            
                                
                              }
                               
                             
                          }
                          
                     }
                     const filterfun2=()=>{
                        var filter2=document.getElementById('branch2').value;
                          var mytable=document.getElementById('mytable');
                          var tr=mytable.getElementsByTagName('tr');
                          for(var i=1;i<tr.length;i++)
                          {
                              var td=tr[i].getElementsByTagName('td')[3];
                              
                              if(td)
                              {
                                   var textvl=td.textContent||td.innerHTML;
                                   if (textvl.indexOf(filter2)>-1  ) 
                                            tr[i].style.display="";
                                   else
                                            tr[i].style.display="none";
                              }
                             
                          }
                        
                     }
                     </script>    


    <p>  </p>
    <footer>
        <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
        <p1>follow us on</p1>
        <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
        <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
    </footer>
</body>

</html>
