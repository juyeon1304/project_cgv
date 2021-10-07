<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";
    $userid = $_SESSION['userid'];

    $b_idx = $_GET['b_idx'];
    $sql = "select b_idx, b_title, b_userid, b_content, b_file from tb_board where b_idx='$b_idx'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    $b_title = $row['b_title'];
    $b_content = $row['b_content'];
    $b_file = $row['b_file'];

    $imgpath = "";
    if($row['b_file'] != ""){
        $imgpath = "<img src='".$b_file."' width='200' alt='이미지'>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글수정</title>
</head>
<body>
    <h2>글수정</h2>
    <form action="editP.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="b_idx" value="<?=$b_idx?>">
        <p>아이디 : <?=$userid?></p>
        <p>제목 : <input type="text" name="b_title" value="<?=$b_title?>"></p>
        <p>내용</p>
        <p><textarea cols="40" rows="6" name="b_content"><?=$b_content?></textarea></p>
        <p><input type="file" name="b_file"></p>
        <p><?=$imgpath?></p>
        <p><input type="submit" value="확인"> <input type="reset" value="다시작성"> <input type="button" value="리스트" onclick="location.href='list.php'"></p>
    </form>
</body>
</html>