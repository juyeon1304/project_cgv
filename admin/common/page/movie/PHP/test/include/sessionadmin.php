<?php

    session_start();
    if(!isset($_SESSION['userid']) && $_SESSION['user_type'] == 'A1'){
        echo "<script>alert('잘못된 접근입니다. 로그인 하세요. ); location.href='../../index.html'</script>";
    }

?>