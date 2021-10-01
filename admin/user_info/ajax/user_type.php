<?php
include "../include/dbconn.php";


    $Y_useridx = $_GET['x_useridx'];
    $Y_user_type = $_GET['x_user_type'];
    $Y_arr_count = $_GET['x_arr_count'];
    
  if(!$conn){
    echo ("DB연결 실패");
  }else{
    $sql ="update user_info set info_type = '$Y_user_type' where info_seq = '$Y_useridx'";
    $result = mysqli_query($conn, $sql);

    echo $Y_useridx.','.$Y_user_type;
  }
?>