<?php
    session_start();
    require_once "pdo.php";
   
    if(isset($_POST["submit"]))
    { 
        if(isset($_SESSION['cart']))
        {
            if($_POST["qty"]==0)
                unset($_SESSION['cart'][$_POST["item"]]);
            else
                $_SESSION['cart'][$_POST["item"]]=$_POST["qty"];    
        }
        else
        {
            $_SESSION['cart']=array();
            $_SESSION['cart'][$_POST["item"]]=$_POST["qty"];
            if($_POST["qty"]==0)
                unset($_SESSION['cart'][$_POST["item"]]);
        }
         header("location:cart.php");
    }
?>