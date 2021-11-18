<?php
include "./include/dbconn.php";

// theater_idx 가져옴 
if(!isset($_GET['theater_idx'])){
    echo "<script>alert('잘못된 접근'); location.href='./theater-chk.php';</script>";
}
$theater_idx = $_GET['theater_idx'];

$sql = "delete from theater_info where theater_idx = '$theater_idx'";
$result = mysqli_query($conn,$sql);


?>
<script>
    alert('삭제되었습니다.');
    location.href="/admin/theater_info/theater-chk.php";

</script>