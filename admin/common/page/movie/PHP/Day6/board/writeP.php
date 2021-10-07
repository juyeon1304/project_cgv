<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";

    $userid = $_SESSION['userid'];
    $b_title = $_POST['b_title'];
    $b_content = $_POST['b_content'];
    $filepath = "";

    if($_FILES['b_file']['tmp_name']){
        $uploads_dir = "./upload";
        $allowd_ext = array('jpg', 'jpeg', 'png', 'gif', 'bmp');
        $error = $_FILES['b_file']['error'];
        $name = $_FILES['b_file']['name'];  // apple.png
        $ext = explode('.', $name); // $ext[0] = "apple", $ext[1] = "png"
        $rename = $ext[0].time();
        $rename = $rename.".".$ext[1];
        $ext = strtolower(array_pop($ext));

        if(!in_array($ext, $allowd_ext)){
            echo "허용되지 않은 확장명입니다";
            exit;
        }

        $filepath = $uploads_dir."/".$rename;
        move_uploaded_file($_FILES['b_file']['tmp_name'], $filepath);
    }

    if(!$conn){
        echo "DB연결 실패";
    }else{
        $sql = "insert into tb_board (b_userid, b_title, b_content, b_file) values ('$userid', '$b_title', '$b_content', '$filepath')";
        $result = mysqli_query($conn, $sql);
        echo "<script>alert('글이 저장되었습니다');location.href='list.php';</script>";
    }
?>