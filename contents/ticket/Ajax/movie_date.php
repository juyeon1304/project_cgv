<?php

include "../../../admin/user_info/include/dbconn.php";
$Y_mov_code = $_GET['mov_code'];
$Y_theater_code = $_GET['theater_code'];

if(!$conn){
    echo ("DB연결 실패");
  }else{
  $sql = "select min(time_schedule) as time_schedule,max(time_schedule_e) as time_schedule_e From movie_total_info where time_movie = '$Y_mov_code' and time_theater = '$Y_theater_code';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $s_date =$row['time_schedule'];
    $e_date =$row['time_schedule_e'];
  }
    
  echo $s_date.','.$e_date;




?>