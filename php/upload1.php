<?php
    session_start();
    require_once "pdo.php";
    if(isset($_POST['submit'])) 
    {
      $user=$_SESSION['username'];
      $sql="select * from customer where  customerid=$user";
      $stmt=$pdo->query($sql);
      $row=$stmt->fetch(PDO::FETCH_ASSOC);
      print($row['customerid']);
      $sql="update `customer` set  fname=:fname,lname=:lname,email=:email,phno=:phno where customerid=$user";
      $stmt=$pdo->prepare($sql);
      $stmt->execute(array(':fname'=>$_POST['fname'],':lname'=>$_POST['lname'],':email'=>$_POST['email'],':phno'=>$_POST['phno']));
    }
    if(isset($_POST['submit']) && isset($_FILES['my_image']) )
    {
        session_start();
        require_once "pdo.php";
        $img_name=$_FILES['my_image']['name'];
        $img_size=$_FILES['my_image']['size'];
        $tmp_name=$_FILES['my_image']['tmp_name'];
        $error=$_FILES['my_image']['error'];
        if($error === 0)
        {
            if($img_size>12500000)
            {
                $em="your file is too large";
                header("Location:profile.php?error=$em");
            }
            else
            {
                $user=$_SESSION['username'];
                $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
                $img_ex_lc=strtolower($img_ex);
                $allowed_exs=array("jpg","jpeg","png");
                if(in_array($img_ex_lc,$allowed_exs))
                {
                    $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path='uploads/'.$new_img_name;
                    move_uploaded_file($tmp_name,$img_upload_path);
                    $sql="update `customer` set photo=:pho where customerid=$user";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute(array(':pho'=>$new_img_name));
				    header("Location:profile.php");
                }
                else
                {
                    $em="you cannot uplaod file of this type";
                    header("Location:profile.php?error=$em");
                }
            }
        }
        else{
            $em="unknown error occured!";
            header("Location:profile.php?error=$em");
        }
    }
    else
    {
        header("Location:profile.php");
    }
    if($_POST['when']==='yes')
            header("Location:password.php");
?>