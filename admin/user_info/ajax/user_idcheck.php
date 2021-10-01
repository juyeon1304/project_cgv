<?php
include "../include/dbconn.php";
    $userid = $_GET['x_userid'];
    
    $sql = "select count(info_seq) as id_check from user_info where info_userid = '$userid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $id_check =$row['id_check'];
    
    if($id_check > 0){
        echo "n";
    }else{
        echo "y";
    }




?>