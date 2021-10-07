<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";

    if(!isset($_GET['b_idx'])){
        echo "<script>alert('잘못된 접근입니다');location.href='./list.php';</script>";
    }

    $b_idx = $_GET['b_idx'];

    $sql = "select b_idx, b_userid, b_title, b_content, b_hit, b_like, b_regdate from tb_board where b_idx=$b_idx";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $b_userid = $row['b_userid'];
    $b_title = $row['b_title'];
    $b_content = $row['b_content'];
    $b_hit = $row['b_hit'];
    $b_like = $row['b_like'];
    $b_regdate = $row['b_regdate'];    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글보기</title>
</head>
<body>
    <h2>글보기</h2>
    <table border="1" width="800">
        <tr>
            <td>제목</td>
            <td><?=$b_title?></td>
        </tr>
        <tr>
            <td>글쓴이</td>
            <td><?=$b_userid?></td>
        </tr>
        <tr>
            <td>날짜</td>
            <td><?=$b_regdate?></td>
        </tr>
        <tr>
            <td>조회수</td>
            <td><?=$b_hit?></td>
        </tr>
        <tr>
            <td>좋아요</td>
            <td><?=$b_like?></td>
        </tr>
        <tr>
            <td>내용</td>
            <td><?=$b_content?></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="button" value="수정">
                <input type="button" value="삭제">
                <input type="button" value="리스트" onclick="location.href='./list.php'">
            </td>
        </tr>
    </table>
</body>
</html>