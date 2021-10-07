<?php
    include "../include/sessioncheck.php";
    include "../include/dbconn.php";

    $re_boardidx = $_GET['re_boardidx'];
    $re_idx = $_GET['re_idx'];

    $sql = "delete from tb_reply where re_idx='$re_idx'";
    $result = mysqli_query($conn, $sql);
?>
<script>
    alert('삭제되었습니다');
    location.href='./detail.php?b_idx=<?=$re_boardidx?>';
</script>