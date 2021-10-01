<?php
include "./include/dbconn.php";
    $user_idx = $_GET['x_user_idx'];
    $user_idx = $user_idx;

    // echo $user_idx;
    $sql = "select * from user_info where info_seq = '$user_idx'";
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
</head>
<body>
    <h2 id="detail_h2">User Details</h2>
    <div class="de_top">
        <p>Name : <span><?=$user_name?></span></p>
        <p>Reset Password : <input type="text" name="x_password" /><button type="submit">변경</button></p>
    </div>
    <div class="de_menu_bar">
        <div class="de_menu1">Login History</div>
        <div class="de_menu2">Movie History</div>
    </div>
    <div class="de_contain">
        
    </div>



</body>
</html>