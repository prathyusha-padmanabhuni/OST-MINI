<!DOCTYPE html>
<?php
    session_start();
?>
 
<html>
     <head>
         <title>E-CANTEEN | item add qty</title>
         <link rel="stylesheet" type="text/css" href="stylecss/admitemaddqty.css">
         <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  
        
         
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
                        <li><a href="admitemadd.php">ADD ITEM </a>
                        </li>
                        <li><a href="admitemview.php">VIEW ITEM</a>
                        </li>
                        <li><a href="admitemdel.php">DEL ITEM</a>
                        </li>
                    </ul>
                </nav>
            </div>
                 <form method="post" action="admitemaddqty.php">
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
                <div>
                 <table  style="width:70%" id="mytable">
                 <tr> 
                 <th> </th>
                 <th> ITEM ID </th>
                 <th> ITEM NAME </th>
                 <th> QUANTITY </th>
                 </tr>
                    <?php
						require_once "pdo.php";
                        if(isset($_POST['reset']))
                                {
                                     
                                    $sql1="update `menu` set requir=:req  ";
                                    $stmt1=$pdo->prepare($sql1);
                                    $stmt1->execute(array(':req'=>'0'));
                                }
						try{
							if(isset($_SESSION['username']))
							{
                               
                                
                                    $com="";
                                     
                                     
                                    $sql="select * from menu  order by itemid";
                                    $stmt=$pdo->query($sql);
                                   
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                        $checked=[];
                                        if(isset($_POST['chk']))
                                          $checked=$_POST['chk'];
                                        
									    ?>
										<tr>
                                            <td> <input type="checkbox" name="chk[]" value="<?=$row['itemid']?>" > </td>
                                           
											<td > <?=$row['itemid']?></td>
                                            <td style="display:none" > <?=$row['typevorn']?></td>
                                            <td  style="display:none"> <?=$row['category']?></td>
											<td> <?=$row['iname']?></td>
											<td> <?=$row['requir']?> </td>	
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
                    
                    <?php
                      if(isset($_POST['chk']))
                            {
                                $checked = [];
                                $checked = $_POST['chk'];
                                foreach($checked as $rowed)
                                {
                                    
                                    $sql="select * from menu where itemid in ($rowed)";
                                    $stmt=$pdo->query($sql);
                                
                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
                                    {
                                        $req=$_POST['quant']+$row['requir'];
                                        $item =$row['itemid'];
                                        $sql1="update `menu` set requir=:req where itemid=:id";
                                        $stmt1=$pdo->prepare($sql1);
                                        $stmt1->execute(array(':req'=>$req,':id'=>$item));
                                          
                                    }
                                }
                               
                                
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
                                   if (textvl.indexOf(filter1)>-1) 
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
                                   if (textvl.indexOf(filter2)>-1) 
                                            tr[i].style.display="";
                                   else
                                            tr[i].style.display="none";
                              }
                             
                          }
                        
                     }
                     </script>    
                    
            <br>
            <br>

                <div class="select-all">
                    <input type="button" onclick='selects()' name="selec" value="SelectAll"/> &nbsp &nbsp &nbsp &nbsp 
                    <input type="button" onclick='deSelect()' name="deselec" value="DeselectAll"/> 
                </div>	  
                
                <div class="quantity">	
                    <label for="quant">Enter Quantity:</label> <br>
                    <input type="text" id="quant" name="quant" />&nbsp &nbsp
                    <input class="btn solid" type="submit" name="submit" value="submit"   />
                    <br>
                    <input class="btn solid" type="submit" name="reset" value="reset"   />
                    
                </div>

            </form>         
        </div>
                <script>
                    const selects=()=>{ 
                         
                          var mytable=document.getElementById('mytable');
                          var tr=mytable.getElementsByTagName('tr'); 
                        var ele=document.getElementsByName('chk[]');  
                        for(var i=0,j=1; i<ele.length; i++,j++){
                             console.log(tr[i]);
                              if(tr[j].style.display=='')
                              {
                                if(ele[i].type=='checkbox' )  
                                    ele[i].checked=true;  
                              }
                            
                        }  
                    }  
                    const deSelect=()=>{  
                        var mytable=document.getElementById('mytable');
                        var tr=mytable.getElementsByTagName('tr'); 
                        var ele=document.getElementsByName('chk[]');  
                        for(var i=0,j=1; i<ele.length; i++,j++){
                            if(tr[j].style.display=='') 
                            if(ele[i].type=='checkbox')  
                                ele[i].checked=false;  
                            
                        }  
                    }                         
                </script>
                 
        <footer>
            <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
            <p1>follow us on</p1>
            <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
            <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
        </footer>
     </body>



</html>