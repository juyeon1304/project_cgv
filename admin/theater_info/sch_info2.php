<?php
include "./include/dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>time List</title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <style>
        th, td { text-align : center; align-items: center; }
    </style>
</head>
<body class="body">
    <div class="form" style="
    position: relative;
    width: auto; height: auto;
    padding-top: 20px; padding-left: 20px; padding-bottom : 40em;
    overflow-y : auto;
    ">
        <h2>스케줄 조회2</h2>
        <form action="movie_info.php" method="post"> 
        
        <section>
            <div class="col-md-11">
                <table class="table table-condensed" style="position: absolute; top : 0px;">
                    <tr class="h4">
                        <th>no.</th>
                        <th>영화관</th>
                        <th>상영관</th>
                        <th>영화코드</th>
                        <th>시작 날짜</th>
                        <th>종료 날짜</th>
                        <th>시작 시간</th>
                        <th>종료 시간</th>
                    </tr>
                    <?php
                        
                        // $sql = 'select * from time_info order by time_idx desc';

                        $sql = 'select 
                        time_idx,
                        time_theater,
                        (select theater_name from theater_info where theater_idx = time_theater) as theater_name,
                        time_room,
                        (select room_name from room_info where room_theater = time_theater and room_idx = time_room) as room_name,
                        (select M_Title from movie_info where M_Code = time_movie) as movie_name,
                        time_schedule,
                        time_schedule_e,
                        time_start,
                        time_end
                         From time_info order by time_idx desc';

                        $result = mysqli_query($conn, $sql);
                        $arr_count = 0;
                        while($row = mysqli_fetch_array($result)){
                            $time_idx = $row['time_idx']; 
                            $time_theater = $row['time_theater'];
                            $theater_name = $row['theater_name'];
                            $time_room = $row['time_room'];
                            $room_name = $row['room_name'];
                            $movie_name = $row['movie_name'];
                            $time_schedule = $row['time_schedule'];
                            $time_schedule_e = $row['time_schedule_e'];
                            $time_start = $row['time_start'];
                            $time_end = $row['time_end'];
                    ?><!--  -->
                    <tr class="h5" style="height: 50px !important; overflow: hidden !important;">
                        <td class="movie_info2"><?=$time_idx?></td>
                        <td class="movie_info5"><strong style="font-size:1.2em"><?=$theater_name?></strong> code:<?=$time_theater?></td>
                        <td class="movie_info7"><strong style="font-size:1.2em"><?=$room_name?></strong> code:<?=$time_room?></td>
                        <td class="movie_info7"><?=$movie_name?></td>
                        <td class="movie_info8"><?=$time_schedule?></td>
                        <td class="movie_info9"><?=$time_schedule_e?></td>
                        <td class="movie_info10"><?=$time_start?></td>
                        <td class="movie_info11"><?=$time_end?></td>
                    </tr>
                    <?php
                    $arr_count++;
                    };
                    ?>
                </table>
            </div>
        </section>
        </form>
        <div id="text"></div>
    </div>
</body>
</html>