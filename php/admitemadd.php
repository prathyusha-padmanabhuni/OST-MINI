<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CANTEEN|ITEM ADD </title>
    <link rel="stylesheet"  href="stylecss/admitemadd.css">



        
    
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
                    <li><a href="admitemaddqty.php">ADD ITEM QTY</a>
                    </li>
                    <li><a href="admitemview.php">VIEW ITEM</a>
                    </li>
                    <li><a href="admitemdel.php">DEL ITEM</a>
                    </li>
            </ul>
        </nav>
        </div>
     
    <form  method="post"  action="upload2.php" enctype="multipart/form-data">
      <table border="0" bgcolor="coral" align="center" cellspacing="20">
        <th colspan="2" >ADD ITEMS</th>
        <tr>
          <td> click the type :</td>  
          <td>
              <input name="when" type="radio" value="vegi">Veg</input>
              <input name="when" type="radio" value="nonveg" >Non-veg</input>
          </td>
        </tr>
        <tr>
            <td>Category</td>
            <td> <select id="category" name="category">
                        <option value="select">.....Select....</option>
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
        </tr>
        <tr>
          <td>Item Name</td>
          <td><input type="text" placeholder="Item Name" name="iname" required></td>
        </tr>
        <tr>
          <td>Item Id</td>
          <td><input type="text" placeholder="Item Id" name="iid" required></td>
          <td id="id1"></td>
        </tr>
      
        <tr>
          <td>Description</td>
          <td><input type="text" placeholder="Description" name="desc" required></td>
        </tr>
        <tr>
          <td>Cost</td>
          <td><input type="text" placeholder="cost" name="cost" required></td>
        </tr>
        <tr>
            <td>Cooking Time</td>
            <!-- <td><input type="text" placeholder="Time" name="ictime" required></td> -->
            <td><input type="time" id="coTime" placeholder="cook time"  name="ictime" value="00:30:00" required></td>
        </tr>
        <tr>
            <td>Opening Time:</td>
            <td><input type="time" id="opTime" placeholder="open Time"  name="ioptime" value="12:00:00"required></td>
        </tr>
        <tr>
            <td>Closing Time:</td>
            <td><input type="time" id="clTime" placeholder="close Time"  name="iclostime" value="12:00:00"required></td>
        </tr>
        
        <tr>
          <td>Photo</td>  
          <td>
              <input type="file" name="my_img">   
          </td>
        </tr>
      
        <tr>
          <td colspan="2" align="center"> <input type="submit" id="button" name="submit" value="submit"></a></td>
        </tr>
      </table>
    </form>
   
  </div>
 <footer>
  <p>ANITS e-canteen, Copyright &copy; 2021</p><br>
  <p1>follow us on</p1>
  <img src="https://1000logos.net/wp-content/uploads/2016/11/Facebook-logo.png"width="30px" height="20px">
  <img src="https://i.pinimg.com/originals/f7/5d/94/f75d94874d855a7fcfcc922d89ac5e80.png"width="30px" height="20px">
</footer>
</body>

</html>
