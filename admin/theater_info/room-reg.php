
<?php
include "./include/dbconn.php";

// theater_idx 가져옴 
if(!isset($_GET['theater_idx'])){
    echo "<script>alert('잘못된 접근'); location.href='./theater-chk.php';</script>";
    
}

//영화관 코드 가져옴
$theater_idx = $_GET['theater_idx'];

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
    <title>상영관 등록</title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
   <script src='/admin/theater_info/js/room.js'></script>
</head>
<body class="body" style="">
    <h2>상영관 등록 - CGV<?=$theater_name?></h2>
    <form class="form-horizontal" name="fm_regRoom" id="fm_regRoom" method="post" action="room-regP.php?theater_idx=<?=$theater_idx?>" onsubmit="return sendit()">
        <div class="form-group">
            <label for="roomCode" class="col-sm-2 control-label">영화관 코드</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="roomCode" id="roomCode" value="<?=$theater_idx?>">
            </div>
        </div>
        <div class="form-group">
            <label for="roomName" class="col-sm-2 control-label">상영관 이름 *</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="roomName" id="roomName" maxlength="100" placeholder="새로 등록할 상영관 이름을 입력해주세요. 예: N관 ">
            </div>
        </div>
        <div class="form-group">
            <label for="roomEtc" class="col-sm-2 control-label">상영관 추가 설명</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="roomEtc" id="roomEtc" maxlength="100" placeholder="상영관 참고사항">
            </div>
        </div>
        <div class="form-group">
            <label for="roomSeat" class="col-sm-2 control-label">상영관 좌석수 *</label>
            <div class="col-sm-7">
            <input type="number" class="form-control" name="roomSeat" id="roomSeat" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">등록</button>
        </div>
    </form>
</body>
</html>