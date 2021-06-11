<?php
    session_start();
    require_once "pdo.php";
        $user=$_POST['iid'];
        $sql="select count(*) from menu where  itemid=$user";
        $stmt=$pdo->query($sql);
        $count = $stmt->fetchColumn();
    if(isset($_POST['submit'])) 
    {
        if($count==0)
        {
            $sql="insert into menu(itemid,iname,cost,typevorn,category,ctime,descr,clostim,optim) values(:itemid,:iname,:cost,:typevorn,:category,:ctime,:descr,:clostime,:ioptime)";
            $stmt=$pdo->prepare($sql);
            $stmt->execute(array(':itemid'=>$_POST['iid'],':iname'=>$_POST['iname'],':cost'=>$_POST['cost'],':typevorn'=>$_POST['when'],':category'=>$_POST['category'],':ctime'=>$_POST['ictime'],':descr'=>$_POST['desc'],':clostime'=>$_POST['iclostime'],':ioptime'=>$_POST['ioptime']));
        }
        else{
            echo "<script> 
					 document.getElementById('id1').innerHTML = 'id is present enter new id'
					 </script>";
        }
    }
    if(!isset($_FILES['my_img']))
        echo "3";
     
    if(isset($_POST['submit']) && isset($_FILES['my_img']) )
    {
        session_start();
        require_once "pdo.php";
        $img_name=$_FILES['my_img']['name'];
        $img_size=$_FILES['my_img']['size'];
        $tmp_name=$_FILES['my_img']['tmp_name'];
        $error=$_FILES['my_img']['error'];
        if($error === 0)
        {
            if($img_size>12500000)
            {
                $em="your file is too large";
                header("Location:admin.php?error=$em");
            }
            else
            {
                $user=$_POST['iid'];
                $img_ex=pathinfo($img_name,PATHINFO_EXTENSION);
                $img_ex_lc=strtolower($img_ex);
                $allowed_exs=array("jpg","jpeg","png");
                if(in_array($img_ex_lc,$allowed_exs))
                {
                    $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path='menu/'.$new_img_name;
                    move_uploaded_file($tmp_name,$img_upload_path);
                    $sql="update `menu` set iphoto=:pho where  itemid=$user";
                    $stmt=$pdo->prepare($sql);
                    $stmt->execute(array(':pho'=>$new_img_name));
				    header("Location:admitemview.php");
                }
                else
                {
                    $em="you cannot uplaod file of this type";
                    header("Location:admin.php?error=$em");
                }
            }
        }
        else{
            $em="unknown error occured!";
            header("Location:admin.php?error=$em");
        }
    }
    else
    {
        header("Location:admin.php");
    }
?>