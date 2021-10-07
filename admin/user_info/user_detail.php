<?php
include "./include/dbconn.php";
include './include/sessionadmin.php';
    if(isset($_POST['x_p_change'])){
        $Y_password = $_POST['x_password'];
        $Y_user_idx = $_POST['x_user_idx'];
        $user_idx = $Y_user_idx;
    }else{
        $Y_user_idx = $_GET['x_user_idx'];
        $user_idx = $Y_user_idx;
    }
    

    // password change
    if(isset($Y_password)){
        $sql = "update user_info set info_password = '$Y_password' where info_seq = '$Y_user_idx'";
        $result = mysqli_query($conn, $sql);

        echo "<script>alert('패스워드 변경이 완료 되었습니다.'); </script>";

    }
    

    // echo $user_idx;
    $sql = "select * from user_info where info_seq = '$Y_user_idx'";
    $result = mysqli_query($conn, $sql);    
    $row = mysqli_fetch_array($result);
    $userid = $row['info_userid'];
    $user_name = $row['info_name'];
    $birth = $row['info_birth'];
    $phone = $row['info_phone'];
    $email = $row['info_email'];
    $type = $row['info_type'];
    $reg_date = $row['info_reg_date'];
    $useridx = $row['info_seq'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet"  href="./css/user_info.css" type="text/css" /> 
    <script type="text/javascript" src="./js/user_detail.js"></script> 
</head>
<body>
    <form action="./user_detail.php" method="post" onsubmit="return pass_check()">
    <h2 id="detail_h2">User Details</h2>
    <div class="de_top">
        <p>Name : <span><?=$user_name?></span></p>
        <p>Reset Password : <input type="password" name="x_password" id="c_password"  /><button type="submit" name='x_p_change' value="c_pass">변경</button></p>
        <input type="hidden" name="x_user_idx" value="<?=$Y_user_idx?>">
    </div>
    </form>
    <div class="de_menu_bar">
        <div id="de_menu1">Login History</div>
        <div id="de_menu2">Movie History</div>
    </div>
    <div id="de_contain1" class="dis_on">
        <?php
            $seq = 1;
           $sql = "select * from user_login_his where log_userid = '$userid'  order by log_date desc";
           $result = mysqli_query($conn, $sql);    
           while($row = mysqli_fetch_array($result)){
            $log_ip = $row['log_ip'];
            $log_com = $row['log_com'];
            $log_date = $row['log_date'];
        ?>

            <P>
                <?=$seq?>
                IP : <?=$log_ip?>
               Date : <?=$log_date?>

            </P>


        <?php
        $seq++;
           };
        ?>
    </div>
    <div id="de_contain2"  class="dis_off">
       
    </div>



</body>
</html>