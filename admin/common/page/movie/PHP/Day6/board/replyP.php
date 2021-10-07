<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";

    $re_content = $_POST['re_content'];
    $b_idx = $_POST['b_idx'];
    $id = $_SESSION['userid'];

    $sql = "insert into tb_reply(re_userid, re_content, re_boardidx) values ('$id', '$re_content', '$b_idx')";
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('저장되었습니다');location.href='./detail.php?b_idx=".$b_idx."';</script>";
?>