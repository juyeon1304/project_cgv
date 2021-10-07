<?php
    session_start();
    // echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
<?php
    if(!isset($_SESSION['id'])){
?>
    <form method="post" action="3-loginP.php">
        <p><label>아이디 : <input type="text" name="userid"></label></p>
        <p><label>비밀번호 : <input type="password" name="userpw"></label></p>
        <p><input type="submit" value="로그인"></p>
    </form>
<?php
    }else{
?>
    <p><?=$_SESSION['id']?>님 환영합니다.</p>
    <p><a href="./3-logout.php">로그아웃</a></p>
<?php
    }
?>
</body>
</html>