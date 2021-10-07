<?php
    session_start();
    include "./include/dbconn.php";

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];

    if(!$conn){
        echo "DB연결 실패";
    }
    else{
        $sql = "select mem_idx, mem_userid, mem_name from tb_member where mem_userid='$userid' and mem_userpw='$userpw'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $userid = isset($row['mem_userid']) ? $row['mem_userid'] : '';

        if($userid == ''){
            echo "<script>alert('아이디 또는 비밀번호를 확인하세요');history.back();</script>";
        }else{
            $_SESSION['idx'] = $row['mem_idx'];
            $_SESSION['userid'] = $row['mem_userid'];
            $_SESSION['name'] = $row['mem_name'];
            echo "<script>alert('로그인 되었습니다');location.href='login.php';</script>";
        }
    }
?>