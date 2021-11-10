<?php

    session_start();
    if(!isset($_SESSION['userid'])){
        echo "<script>alert('잘못된 접근입니다. 로그인 하세요. ); location.href='../../index.html'</script>";
    }

?>