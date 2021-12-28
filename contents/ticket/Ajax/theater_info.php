<?php
include "../../../admin/user_info/include/dbconn.php";

$Y_city_code = $_GET['city_code'];
$area_list = '';
  if(!$conn){
    echo ("DB연결 실패");
  }else{
  $sql = "select theater_name,theater_idx from theater_info where theater_cityCode = '$Y_city_code'";
    $result = mysqli_query($conn, $sql);
    $x = 0;
    while($row = mysqli_fetch_array($result)){
    $theater_name =$row['theater_name'];
    $theater_idx =$row['theater_idx'];
    
    $theater_name = $theater_name.'&'.strval($theater_idx);
    if($x == 0){
        $area_list = $theater_name;
    }else{
        $area_list = $area_list.','.$theater_name;
    }
       $x++;

    }
    if(!$area_list){
        echo 'emty';
    }else{
        echo $area_list;
    }
    
  }


?>
