<?php
include "./include/dbconn.php";

// theater_idx 가져옴 
if(!isset($_GET['theater_idx'])){
    echo "<script>alert('잘못된 접근'); location.href='./theater-chk.php';</script>";
}
$theater_idx = $_GET['theater_idx'];


// 총 상영관 수 구하기 
$sql = "select count(room_idx) as roomCnt from room_info where room_theater = $theater_idx";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$roomCnt = $row['roomCnt'];


//해당 영화관 이름 추출
$sql = "select theater_name from theater_info where theater_idx = $theater_idx";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$theater_name = $row['theater_name'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상영관 관리 </title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet"  href="./css/movie_info.css" type="text/css"> -->
    <!-- <script type="text/javascript" src="./js/movie_info.js"></script> -->
</head>
<body class="body">
    <h2> 상영관 관리 - <span>CGV<?=$theater_name?></span>(영화관 코드:<?=$theater_idx?>)</h2>
    <p>총 상영관 수 : <?=$roomCnt?></p>
    <form action="theater-chk.php" method="post">
    <a href="./room-reg.php?theater_idx=<?=$theater_idx?>" class="btn btn-default">상영관 등록하기</a>
    <a href="./SJ/seat/02.seatsetting.php?theater_idx=<?=$theater_idx?>" class="btn btn-default">엄성재 좌석 등록하기</a>
    <a href="./SJ/seat/04.seat_list.php?theater_idx=<?=$theater_idx?>" class="btn btn-default">엄성재 좌석 조회하기</a>
    <a href="./theater-chk.php" class="btn btn-default">영화관 조회</a>
    <section>
        <div class="col-md-11">
            <table class="table table-condensed">
                <thead>
                <tr class="h4">
                    <!-- <th>상영관 코드</th> -->
                    <th>상영관 이름</th>
                    <th>상영관 추가설명</th>
                    <th>상영관 좌석 수 </th>
                </tr>
                </thead>
                <tbody>

                <?php
                      $sql = 'select * from room_info where room_theater = '.$theater_idx;
                      $result = mysqli_query($conn, $sql);
  
                      while($row = mysqli_fetch_array($result)){
                        $roomIdx = $row['room_idx'];
                        $roomName = $row['room_name'];
                        $roomEtc = $row['room_etc'];
                        $roomSeat = $row['room_seat'];
                    ?>

                    <tr class="" style="">
                        <!-- <td class="room_info1"><?=$roomIdx?></td> -->
                        <td class="room_info4"><?=$roomName?></td>
                        <td class="room_info4"><?=$roomEtc?></td>
                        <td class="room_info4"><?=$roomSeat?></td>
                        <td>
                        <button name="Del_button" type="submit" value="delete" class="btn btn-default">삭제</button></td>
                    </tr>

                <?php
                    };
                ?>
                </tbody>
            </table>
        </div>
    </section>
    </form>
    <div id="text"></div>
</body>
</html>