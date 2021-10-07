<?php
    session_start();
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
    if(!isset($_SESSION['userid'])){
?>
    <form method="post" action="loginP.php">
        <p><label>아이디 : <input type="text" name="userid"></label></p>
        <p><label>비밀번호 : <input type="password" name="userpw"></label></p>
        <p><input type="submit" value="로그인"></p>
    </form>
    <p>아직 회원이 아니시라면? <a href='./regist.php'>회원가입</a>
<?php
    }else{
?>
    <p style='font-size: 30px; color: deepskyblue;'><?=$_SESSION['userid']?>님 환영합니다.</p>
    <p><input type="button" value="정보수정" onclick="location.href='./info.php'"> <input type="button" value="게시판" onclick="location.href='./board/list.php'"> <input type="button" value="로그아웃" onclick="location.href='./logout.php'"></p>
<?php
    }
?>
</body>
</html>