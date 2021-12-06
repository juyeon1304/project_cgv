<?php

include "./include/dbconn.php";

    $checks = $_POST["inputGenre"];
    $checksstr = "";
    foreach($checks as $h){
        $checksstr .= $h.", ";
    }
    substr($checksstr, 0, -1); 
    // 1. 문자열 길이(strlen) 2. 총 길이에 -1을 주기
    // foreach 안에 if 문 쓰기

    $sql = "INSERT INTO part5(M_Genre_Code) VALUES ('$checksstr')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo("<h3>".$checksstr."이 입력 되었습니다.</h3>");
?>
<P> 입력 값 : <?=$checksstr?></p>

<script>
    alert('등록 성공');
</script>
</body>
</html>