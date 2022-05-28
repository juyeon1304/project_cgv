<?php
include "../include/dbconn.php";

// theater_idx 가져옴 
if(!isset($_GET['theater_idx'])){
    echo "<script>alert('잘못된 접근'); location.href='./theater-chk.php';</script>";
}
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
    <script src="../js/seatSJ.js"></script>
    <link rel="stylesheet" href="../css/seatset.css" type="text/css" />
</head>
<body>
    <h2>1단계) 좌석 세팅 - <span>CGV<?=$theater_name?> </span></h2>
    <form class="form-horizontal" name="fm_regRoom" id="fm_regRoom" method="post" action="./03.seatdisplay.php" onsubmit="return sendit()">
        <div class="form-group">
            <label for="idx" class="col-sm-2 control-label">영화관 idx</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" name="idx" id="idx" maxlength="1" placeholder="" value="<?=$theater_idx?>">
            </div>
        </div>
        <div class="form-group">
            <label for="seatrow" class="col-sm-2 control-label">좌석수 - 행(row)</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" name="seat_row" id="seat_row" maxlength="1" placeholder="" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="seatcol" class="col-sm-2 control-label">좌석수 - 열(col)</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" name="seat_col" id="seat_col" maxlength="1" placeholder="" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="seatcol" class="col-sm-2 control-label">복도 - 행1(NRline1)</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" name="null_row1" id="null_row1" maxlength="1" placeholder="" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="seatcol" class="col-sm-2 control-label">복도 - 행2(NRline2)</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" name="null_row2" id="null_row2" maxlength="1" placeholder="" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="seatcol" class="col-sm-2 control-label">복도 - 열1(NCline1)</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" name="null_col1" id="null_col1" maxlength="1" placeholder="" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="seatcol" class="col-sm-2 control-label">복도 - 열2(NCline2)</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" name="null_col2" id="null_col2" maxlength="1" placeholder="" value="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">등록</button>
        </div>
        </div>
    </form>
</body>
</html>

