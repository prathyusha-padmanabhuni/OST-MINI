<?php
                                                if(in_array($row['itemid'],$checked))
                                                {
                                                    // echo "checked";
                                                    $req=$row['requir']+$_POST['quant'];
                                                    
                                                    $sql="update menu set requir=:requ where itemid=:id";
                                                    $stmt=$pdo->prepare($sql);
                                                    $stmt->execute(array(':requ'=>$req,':id'=>$row['itemid']));
                                                }
                                            ?>	