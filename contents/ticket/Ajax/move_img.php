<?php
include "../../../admin/user_info/include/dbconn.php";


    $Y_mov_code = $_GET['mov_code'];
  
  if(!$conn){
    echo ("DB연결 실패");
  }else{
  $sql = "select M_Picture_Code,M_Title from movie_info where M_Code = '$Y_mov_code'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $mov_p_code =$row['M_Picture_Code'];
    $M_Title =$row['M_Title'];

    echo $mov_p_code.','.$M_Title;

  }
?>