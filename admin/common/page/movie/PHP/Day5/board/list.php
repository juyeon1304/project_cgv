<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";

    $sql = "select count(b_idx) as total from tb_board";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $total = $row['total']; // 글 총갯수

    $sql = "select b_idx, b_userid, b_title, b_regdate, b_hit, b_like from tb_board order by b_idx desc";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글목록</title>
</head>
<body>
    <h2>글목록</h2>
    <p>전체 글 개수 : <?=$total?></p>
    <table border="1" width="800">
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>글쓴이</th>
            <th>조회수</th>
            <th>좋아요</th>
            <th>날짜</th>
        </tr>
<?php
        while($row = mysqli_fetch_array($result)){
            $b_idx      = $row['b_idx'];
            $b_userid   = $row['b_userid'];
            $b_title    = $row['b_title'];
            $b_regdate  = $row['b_regdate'];
            $b_hit      = $row['b_hit'];
            $b_like     = $row['b_like'];
?>
        <tr>
            <td><?=$b_idx?></td>
            <td><a href="./detail.php?b_idx=<?=$b_idx?>"><?=$b_title?></a></td>
            <td><?=$b_userid?></td>
            <td><?=$b_hit?></td>
            <td><?=$b_like?></td>
            <td><?=$b_regdate?></td>
        </tr>
<?php
        }
?>
    </table>
    <p><input type="button" value="글쓰기" onclick="location.href='./write.php'"> <input type="button" value="돌아가기" onclick="location.href='../login.php'"></p>
</body>
</html>