<!DOCTYPE html>
<html>
<head>
         <title>ANITS E-CANTEEN | MENU</title>
         <link rel="stylesheet" type="text/css" href="stylecss/menu.css">
         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>
     <body>
                <div class="quantity">
                                                <button  type="button" class="button disabled display-left"  >-</button>
                                                <input type="text" id="qty2" value="1"  >
                                                <button  type="button" class="button display-right"  >+</button>            
                                            </div>
             
      </body>
            <script>
            document.querySelector(".display-left").setAttribute("disabled","disabled");
            var valcount;
            document.querySelector(".display-right").addEventListener("click",function()
            {
                valcount=document.getElementById("qty2").value;
                valcount++;
                document.getElementById("qty2").value=valcount;
                if(valcount>1)
                {
                    document.querySelector(".display-left").removeAttribute("disabled");
                    document.querySelector(".display-left").classList.remove("disabled");
                }
            }
            )
            document.querySelector(".display-left").addEventListener("click",function()
            {
                valcount=document.getElementById("qty2").value;
                valcount--;
                document.getElementById("qty2").value=valcount;
                if(valcount==1)
                {
                    document.querySelector(".display-left").setAttribute("disabled","disabled");
                }
            }
            );
            </script>
</html>