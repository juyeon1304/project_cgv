<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";

    if(!isset($_GET['b_idx'])){
        echo "<script>alert('잘못된 접근입니다');location.href='./list.php';</script>";
    }

    $b_idx = $_GET['b_idx'];

    $sql = "update tb_board set b_hit = b_hit + 1 where b_idx='$b_idx'";
    $result = mysqli_query($conn, $sql);

    $sql = "select b_idx, b_userid, b_title, b_content, b_hit, b_like, b_file, b_regdate from tb_board where b_idx=$b_idx";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    $id = $_SESSION['userid'];  // 로그인 아이디
    $b_userid = $row['b_userid'];   // 글쓴이 아이디
    $b_title = $row['b_title'];
    $b_content = $row['b_content'];
    $b_hit = $row['b_hit'];
    $b_like = $row['b_like'];
    $b_regdate = $row['b_regdate'];    
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
    <title>글보기</title>
    <script>
        function like(){
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function(){
                if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
                    alert('추천되었습니다');
                    document.getElementById("like").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "like_ok.php?b_idx=<?=$b_idx?>", true);
            xhr.send();
        }
    </script>
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
            <td><span id="like"><?=$b_like?></span></td>
        </tr>
        <tr>
            <td>내용</td>
            <td><?=$b_content?></td>
        </tr>
        <tr>
            <td>파일</td>
            <td><?=$imgpath?></td>
        </tr>
        <tr>
            <td colspan="2">
            <?php
                if($id == $b_userid){
            ?>
                <input type="button" value="수정" onclick="location.href='./edit.php?b_idx=<?=$b_idx?>'">
                <input type="button" value="삭제" onclick="location.href='./delete.php?b_idx=<?=$b_idx?>'">
            <?php
                }
            ?>
                <input type="button" value="리스트" onclick="location.href='./list.php'"> 
                <img src="./like.png" width="20" onclick="like()">
            </td>
        </tr>
    </table>
    <hr/>
    <form method="post" action="replyP.php">
        <input type="hidden" name="b_idx" value="<?=$b_idx?>">
        <p><?=$id?> : <input type="text" name="re_content"> <input type="submit" value="확인"></p>
    </form>
    <hr/>
    <?php
        $sql = "select re_idx, re_content, re_regdate, re_userid, re_boardidx from tb_reply where re_boardidx='$b_idx' order by re_idx desc";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_array($result)){
            $re_idx = $row['re_idx'];
            $re_content = $row['re_content'];
            $re_regdate = $row['re_regdate'];
            $re_userid = $row['re_userid'];
            $re_boardidx = $row['re_boardidx'];           
    ?>
        <p><?=$re_userid?> : <?=$re_content?> (<?=$re_regdate?>) 
    <?php
        if($id == $re_userid){
    ?>
        <input type="button" value="삭제" onclick="location.href='replyDel.php?re_idx=<?=$re_idx?>&re_boardidx=<?=$re_boardidx?>'"> 
    <?php
        }
    ?>
    </p> 
    <?php
        }
    ?>
</body>
</html>