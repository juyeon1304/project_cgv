<?php
    include "./include/dbconn.php";

    $theater_name = $_POST["theater_name"]; 
    $room_name = $_POST['room_name'];
    $room_name = substr($room_name, 0, 1);
    $movie_name = $_POST['movie_name'];
    $time_start_schedule = $_POST['time_start_schedule'];
    $time_end_schedule = $_POST['time_end_schedule'];
    $time_run = $_POST['time_run'];
    $time_break = $_POST['time_break'];
    $time_cycle = $_POST['time_cycle'];
    $time_start_date = $_POST['time_start_date'];
    $time_end_date = $_POST['time_end_date'];


    if(isset($_GET["city_code"])){ // 영화관 구분
        $city_code = $_GET["city_code"]; 
        echo  $city_code;
        $sql = "select theater_idx, theater_name from theater_info where theater_cityCode = '$city_code' order by theater_name ASC";

        $result = mysqli_query($conn, $sql);
        $theater_all_text = '';

        $x = 1;

            while($row = mysqli_fetch_array($result)){
                $theater_name = $row['theater_name'];
                $theater_idx = $row['theater_idx'];
                if($x == 1){
                $theater_all_text = $theater_all_text."<option selected value=$theater_idx>".$theater_name."</option>";
                }else{
                    $theater_all_text= $theater_all_text."<option value=$theater_idx>".$theater_name."</option>";
                }
                // echo "<option value=$theater_idx>".$theater_name."</option>";
                $x++;
            }//while end
            echo $theater_all_text;

        }//if end

    if(isset($_GET["theater_code"])){ // 상영관 구분
        $theater_code = $_GET["theater_code"]; 
        $sql = "select room_name from room_info where room_theater = '$theater_code'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $room_name = $row['room_name'];
        }//while end
        echo "<option value=$room_name>".$room_name."</option>";
    }//if end
    
    if(isset($_GET["timeM_code"])){
        $timeM_code = $_GET["timeM_code"]; 
        $sql = "select M_run from movie_info where M_Code = '$timeM_code'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            $M_run = $row['M_run'];
        }//while end
        echo "<option value=$M_run>".$M_run."</option>";
    }//if end

    

    if(!$conn){
        echo "DB연결 실패!";
    }else{ 
        $sql = "INSERT INTO time_info( time_theater, time_room, time_movie, time_schedule, time_schedule_e, time_movie_run, time_break, time_cycle, time_start, time_end ) VALUES ( '$theater_name', '$room_name', '$movie_name', '$time_start_schedule', '$time_end_schedule', '$time_run', '$time_break', '$time_cycle', '$time_start_date', '$time_end_date' )";
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
    <p>영화관 구분 : <?=$theater_name?></p>
    <p>상영관 구분 : <?=$room_name?></p>
    <p>영화 구분 : <?=$movie_name?></p>
    <p>상영 시작일 : <?=$time_start_schedule?></p>
    <p>상영 종료일 : <?=$time_end_schedule?></p>
    <p>영화 러닝 타임 : <?=$time_run?></p>
    <p>정비 시간 : <?=$time_break?></p>
    <p>세트 수 : <?=$time_cycle?></p>
    <p>시작 시간 : <?=$time_start_date?></p>
    <p>종료 시간 : <?=$time_end_date?></p>
</body>
</html>