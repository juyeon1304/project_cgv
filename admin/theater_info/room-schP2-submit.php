<?php
    include "./include/dbconn.php";


    $time_theater = $_POST["theater_code"]; 
    $time_room = $_POST["room_code"]; 
    $time_movie = $_POST["movie_code"]; 
    $time_sch = $_POST["date_start"]; 
    $time_sch_e = $_POST["date_end"]; 
    $time_movie_run = $_POST["theater_code"]; 
    $time_movie_run = (int)$time_movie_run;
    $time_break = $_POST["time_break"]; 
    $time_cycle = $_POST["cnt_cycle"]; 
    $time_start = $_POST["time_start"]; 
    $time_end = $_POST["time_end"]; 


    if(!$conn){
        echo "DB연결 실패!";
    }else{ 
         
    
    $sql = "INSERT INTO time_info( time_theater, time_room, time_movie, time_schedule, time_schedule_e, time_movie_run, time_break, time_cycle, time_start, time_end ) VALUES ( '$time_theater', '$time_room', '$time_movie', '$time_sch', '$time_sch_e', '$time_movie_run', '$time_break', '$time_cycle', '$time_start', '$time_end')";

    $result = mysqli_query($conn, $sql);


    }//else end
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>영화 스케줄이 등록되었습니다.</h2>
    <ul>
        <li>
            <strong>영화관</strong>
            <p>CGV <?=$time_theater?></p>
        </li>
        <li>
            <strong>상영관</strong>
            <p><?=$time_room?></p>
        </li>
        <li>
            <strong>상영 영화</strong>
            <p><?=$time_movie?></p>
        </li>
        <li>
            <strong>개봉 날짜</strong>
            <p><?=$time_sch?></p>
        </li>
        <li>
            <strong>상영 종료 날짜</strong>
            <p><?=$time_sch_e?></p>
        </li>
        <li>
            <strong>러닝 타임</strong>
            <p><?=$time_movie_run?></p>
        </li>
        <li>
            <strong>정비 시간</strong>
            <p><?=$time_break?></p>
        </li>
        <li>
            <strong>상영 반복 횟수</strong>
            <p><?=$time_cycle?></p>
        </li>
        <li>
            <strong>영화 시작 시간</strong>
            <p><?=$time_start?></p>
        </li>
        <li>
            <strong>영화 종료 시간</strong>
            <p><?=$time_end?></p>
        </li>
        
    </ul>
    
</body>
</html>