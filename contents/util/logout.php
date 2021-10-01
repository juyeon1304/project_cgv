
<script>
    sessionStorage.removeItem('userId');
    sessionStorage.claer();
</script>
<?php
    session_start();
    session_unset();
    echo "<script>alert('로그아웃이 되었습니다.'); location.href='../../index.html';</script>";
?>

