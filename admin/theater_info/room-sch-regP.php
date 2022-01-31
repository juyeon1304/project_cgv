<?php

include "./include/dbconn.php";

 
// $cityCode = $_POST["city_code"]; 
$theaterCode = $_POST["theater_code"]; 
$roomCode = $_POST['room_code'];
$movieCode = $_POST['movie_code'];
$runTime = $_POST['movie_run'];
$breakTime = $_POST['time_break'];
$cycleCnt = $_POST['cnt_cycle'];
$startTime = $_POST['time_start'];
$endTime = $_POST['time_end'];
$startDate = $_POST['date_start'];
$endDate = $_POST['date_end'];



    if(!$conn){
        echo "DB연결 실패!";
    }else{ 
        $sql = "INSERT INTO time_info( time_theater, time_room, time_movie, time_schedule, time_schedule_e, time_movie_run, time_break, time_cycle, time_start, time_end ) VALUES 
        ( '$theaterCode', '$roomCode', '$movieCode', '$startDate', '$endDate', '$runTime','$breakTime', '$cycleCnt', '$startTime', '$endTime')";

    $result = mysqli_query($conn, $sql);

?>

<script>
   
</script>