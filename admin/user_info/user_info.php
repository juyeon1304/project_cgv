<?php
include './include/sessionadmin.php';
include "./include/dbconn.php";

    if(isset($_POST['x_search_btn'])){
 
        $y_search = $_POST['x_search'];
        $Y_user_auth = $_POST['x_user_auth'];
        // echo "$y_search_btn";
    }else{
        $y_search = '';
    }
    if(isset($_POST['x_delete_btn'])){
        if(isset($_POST['x_user_idx'])){
            $y_user_idx = $_POST['x_user_idx'];
            foreach($y_user_idx as $i){
                $y_user_idx = $i;
                $sql = "delete from user_info where info_seq='$y_user_idx'";
                $result = mysqli_query($conn, $sql);
                // echo "$y_user_idx";
            }
            
        }
        $y_delete_btn = $_POST['x_delete_btn'];
      
    }else{
        $y_search = '';
    }
    
    
    
    $sql = 'select count(info_seq) as total_user From user_info';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $total = $row['total_user'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet"  href="./css/user_info.css" type="text/css" />
    <script type="text/javascript" src="./js/user_info.js"></script> 
</head>
<body>
    <h2>USER List</h2>
    <form action="user_info.php" method="post">
    <nav><div class="info_btn">
        <?php
        if(isset($_POST['x_search_btn'])){
           $y_search = $_POST['x_search'];
        }else{
            $y_search = '';
        }
         ?>
         <select name="x_user_auth" id="user_auth">
             
             <option value="all">all</option>
             <?php
                $sql = 'select info_type From user_info group by info_type';
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){
                $info_type = $row['info_type'];
                if($Y_user_auth == $info_type){
             ?>
                <option value="<?=$Y_user_auth?>" selected><?=$Y_user_auth?></option>
                <?php
                }else{
                ?>
                <option value="<?=$info_type?>"><?=$info_type?></option>
             <?php
                }
               }
             ?>
         </select>
        <input id="search_input" type="text" name="x_search" value="<?=$y_search?>" />
        <button name="x_delete_btn" class="user_del" Type="submit" value="delete">삭제</button>
        <button name="x_search_btn" class="user_del"  type="submit" value="search">확인</button>
    </div></nav>
    <section>
        <div class="container">
            <table>
                <tr>
                    <th></th>
                    <th>User ID</th>
                    <th>Birth Day</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Regist date</th>
                    
                </tr>
                <?php
                    
                    if(isset($_POST['x_search_btn'])){
                        $y_search = $_POST['x_search'];
                        $Y_user_auth = $_POST['x_user_auth'];
                        if(!isset($y_search) && !isset($Y_user_auth) || !isset($y_search) && $Y_user_auth == 'all'){
                            $sql = "select * From user_info where info_userid";
                        }elseif(isset($y_search) && $Y_user_auth != 'all'){
                            $sql = "select * From user_info where info_userid like '%$y_search%' and info_type = '$Y_user_auth' ";
                        }else{
                            $sql = "select * From user_info where info_userid like '%$y_search%' ";
                        }
                       
                    }else{
                        $sql = 'select * From user_info';
                    }
                    
                    $result = mysqli_query($conn, $sql);
                    $arr_count = 0;
                    while($row = mysqli_fetch_array($result)){
                        $userid = $row['info_userid'];
                        $birth = $row['info_birth'];
                        $phone = $row['info_phone'];
                        $email = $row['info_email'];
                        $type = $row['info_type'];
                        $reg_date = $row['info_reg_date'];
                        $useridx = $row['info_seq'];
                        
                    
                ?>
                <tr>
                    <td><input type="checkbox" class="user_idx" name="x_user_idx[]" value=<?=$useridx?>></td>
                    <td class="user_info1"><a href="./user_detail.php?x_user_idx=<?=$useridx?>"><?=$userid?></td>
                    <td class="user_info2"><?=$birth?></td>
                    <td class="user_info3"><?=$phone?></td>
                    <td class="user_info4"><?=$email?></td>
                    <td class="user_info5">
                        <select name="" class="select_type" onchange="user_type(this,'<?=$type?>','<?=$useridx?>','<?=$arr_count?>')">
                            <?php
                                $sql1 = "select * From user_auth";
                                $result1 = mysqli_query($conn, $sql1);
                                while($row1 = mysqli_fetch_array($result1)){
                                    $auth_type = $row1['auth_type'];
                                 if($type == $auth_type){
                            ?>
                                 <option value="<?=$type?>" selected><?=$type?></option>
                                <?php
                                 }else{
                                ?>
                                <option value="<?=$auth_type?>" ><?=$auth_type?></option>
                            <?php
                                 };
                                };
                            ?>
                        </select>
                    </td>
                    <td class="user_info6"><?=$reg_date?></td>
                    
                </tr>
                <?php
                $arr_count++;
                };
                ?>
            </table>
        </div>
    </section>
    </form>
    <div id="text"></div>
</body>
</html>