<?php
include "../../../admin/user_info/include/dbconn.php";

$Y_mov_code = $_GET['mov_code'];
$Y_theater_code = $_GET['theater_code'];
$Y_mov_date = $_GET['mov_date'];


echo $Y_mov_code.'&'.$Y_theater_code.'&'.$Y_mov_date;

?>