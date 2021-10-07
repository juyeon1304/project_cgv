<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";

    $b_idx = $_GET['b_idx'];
    $sql = "DELETE FROM tb_board WHERE b_idx='$b_idx'";
    $result = mysqli_query($conn, $sql);
?>
<script>
    alert('삭제되었습니다');
    location.href='list.php';
</script>