<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";

    $today = strtotime(date('Y-m-d'));    // 오늘 날짜 객체

    $sql = "select count(b_idx) as total from tb_board";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $total = $row['total']; // 글 총갯수
    $pagePerCount = 10;     // 페이지당 몇개씩 보여줄지 설정
    $start = 0;
    $page = 1;

    if(isset($_GET['page'])){
        $page = $_GET['page'];  // 3
        $start = ($page-1) * $pagePerCount;
    }

    $sql = "select b_idx, b_userid, b_title, b_regdate, b_hit, b_like, b_file from tb_board order by b_idx desc limit $start, $pagePerCount";
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
            <th width="300">제목</th>
            <th>글쓴이</th>
            <th>조회수</th>
            <th>좋아요</th>
            <th width="180">날짜</th>
        </tr>
<?php
        while($row = mysqli_fetch_array($result)){
            $b_idx      = $row['b_idx'];
            $b_userid   = $row['b_userid'];
            $b_title    = $row['b_title'];
            $b_regdate  = $row['b_regdate'];
            $b_hit      = $row['b_hit'];
            $b_like     = $row['b_like'];
            $b_file     = $row['b_file'];

            $datetime = strtotime(substr($b_regdate,0,10));
            $newstr = "";
            if($today == $datetime){
                $newstr = "<img src='./new.png' alt='이미지'>";
            }

            $sql = "select count(re_idx) as replycount from tb_reply where re_boardidx='$b_idx'";
            $result_reply_count = mysqli_query($conn, $sql);
            $row_reply_count = mysqli_fetch_array($result_reply_count);

            $replycount = "";
            if($row_reply_count['replycount'] > 0){
                $replycount = "[".$row_reply_count['replycount']."]";
            }
            
            $imgpath = "";
            if($row['b_file'] != ""){
                $imgpath = "<img src='./image.png' alt='이미지'>";
            }
?>
        <tr>
            <td><?=$b_idx?></td>
            <td><a href="./detail.php?b_idx=<?=$b_idx?>"><?=$b_title?></a> <?=$replycount?> <?=$imgpath?> <?=$newstr?></td>
            <td><?=$b_userid?></td>
            <td><?=$b_hit?></td>
            <td><?=$b_like?></td>
            <td><?=substr($b_regdate, 0, 10)?></td>
        </tr>
<?php
        }
        $pageNums = ceil($total / $pagePerCount);
?>
        <tr>
            <td colspan="6" align="center">
<?php
    for($i=1; $i<=$pageNums; $i++){
        echo "<a href='./list.php?page=".$i."'>".$i."</a> ";
    }
?>
            </td>
        </tr>
    </table>
    <p><input type="button" value="글쓰기" onclick="location.href='./write.php'"> <input type="button" value="돌아가기" onclick="location.href='../login.php'"></p>
</body>
</html>