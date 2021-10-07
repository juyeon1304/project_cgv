<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";

    $b_idx = $_GET['b_idx'];
    if(!$conn){
        echo "연결 객체 생성 실패!";
    }else{
        $sql = "update tb_board set b_like=b_like+1 where b_idx='$b_idx'";
        $result = mysqli_query($conn, $sql);

        $sql = "select b_like from tb_board where b_idx='$b_idx'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo $row['b_like'];
    }
?>