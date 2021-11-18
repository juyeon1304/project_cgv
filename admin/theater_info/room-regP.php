<?php
    include "./include/dbconn.php";
    $roomCode = $_POST["roomCode"]; 
    $roomName = $_POST["roomName"]; 
    $roomEtc = $_POST['roomEtc'];
    $roomSeat = $_POST['roomSeat'];

    // 영화관 코드 
    $theater_idx = $_GET['theater_idx'];


    
   

    if(!$conn){
        echo "DB연결 실패!";
    }else{ 

    $sql = "INSERT INTO room_info( room_name, room_etc, room_seat, room_theater) VALUES ( '$roomName', '$roomEtc', '$roomSeat', '$roomCode')";

    $result = mysqli_query($conn, $sql);
}
?>
<script>
    alert('상영관 등록 성공!');
    location.href="/admin/theater_info/room-chk.php?theater_idx=<?=$theater_idx?>";
</script>