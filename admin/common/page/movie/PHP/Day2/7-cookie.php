<?php
    // key: userid, value: apple, 현재시간+(60초*3), 현재디렉토리
    setcookie("userid", "apple", time() + (60*3), "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>쿠키 만들기</title>
</head>
<body>
    <h2>쿠키 만들기</h2>
</body>
</html>