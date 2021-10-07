<?php
    include "./include/dbconn.php";

    $userid = $_GET['userid'];

    if(!$conn){
        echo "DB연결 실패";
    }else {
        $sql = "select mem_userid from tb_member where mem_userid = '$userid'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_array($result);

        $userid = isset($row['mem_userid']) ? $row['mem_userid'] : '';

        if($userid == ''){
            echo 'n';   // 중복아이디가 없음
        }else{
            echo 'y';   // 중복아이디가 있음
        }
    }
?>