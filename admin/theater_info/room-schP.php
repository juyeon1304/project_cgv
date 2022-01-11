<?php
    include "./include/dbconn.php";

    $theater_name = $_POST["theater_name"]; 
    $room_name = $_POST['room_name'];
    $movie_info = $_POST['movie_info'];
    $time_start_schedule = $_POST['time_start_schedule'];
    $time_end_schedule = $_POST['time_end_schedule'];
    $time_start_date = $_POST['time_start_date'];
    $time_end_date = $_POST['time_end_date'];

    if(isset($_GET["city_code"])){
        $city_code = $_GET["city_code"]; 

        $sql = "select theater_idx, theater_name from theater_info where theater_cityCode = '$city_code'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $theater_name = $row['theater_name'];
            $theater_idx = $row['theater_idx'];
            echo "<option value=$theater_idx>".$theater_name."</option>";
        }
    }//if end
    if(isset($_GET["theater_code"])){
        $theater_code = $_GET["theater_code"]; 

        $sql = "select room_name from room_info where room_theater = '$theater_code'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $room_name = $row['room_name'];
            echo "<option value=$room_name>".$room_name."</option>";
        }
    }//if end

    

    if(!$conn){
        echo "DB연결 실패!";
    }else{ 
        $sql = "INSERT INTO time_info( time_theater, time_room, time_movie, time_schedule, time_schedule_e, time_start, time_end ) VALUES ( '$theater_name', '$room_name', '$movie_info', '$time_start_schedule', '$time_end_schedule', '$time_start_date', '$time_end_date' )";
        echo $sql;
        $result = mysqli_query($conn, $sql);
    }//else end

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스케줄 등록 완료</title>
</head>
<body>
    <h2>스케줄 등록 완료</h2>
    <p>영화관 코드 : <?=$theater_name?></p>
    <p>상영관 코드 : <?=$room_name?></p>
    <p>영화코드 : <?=$movie_info?></p>
    <p>시작 날짜 : <?=$time_start_schedule?></p>
    <p>종료 날짜 : <?=$time_end_schedule?></p>
    <p>종료 시간 : <?=$time_start_date?></p>
    <p>시작 시간 : <?=$time_end_date?></p>
</body>
</html>