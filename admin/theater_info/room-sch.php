<?php
include "./include/dbconn.php";
// include './include/sessionadmin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../common/page\movie/css/movie.css" type="text/css" />
<!-- <script src="./js/movie.js"></script> -->
<script>

const sendit = function(){
const exampleInputFile = document.getElementById('exampleInputFile');
// if(exampleInputFile.value ==''){
//     alert('사진을 등록하여 주세요.');
//     exampleInputFile.focus();
//     return false;
// }
return true;
}
</script>
</head>
<body class="body">
<?php
if(isset($_POST["city_name"])){
    $city_name = $_POST["city_name"];

}

?>

    <h2>스케줄 등록</h2>
    <form class="form-horizontal" name="regform" id="regform" method="post" action="./room-sch.php" onsubmit="return sendit()" >
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">지역별 구분</label>
            <select name="city_name" class="select_type" onchange="this.form.submit()"  >
<?php
$sql = "select * From city_info ORDER BY city_name ASC";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
$city_name1 = $row['city_name'];
$city_code1 = $row['city_code'];
        if( $city_name == $city_code1 ){
?>
          
            <option value="<?=$city_name?>" selected ><?=$city_name1?></option>
<?php
        }else{
?>           
            <option value="<?=$city_code1?>" ><?=$city_name1?></option>
<?php
        }
?>
<?php
            };
?>
            </select>
            <!-- select 로 php로 돌려서 ajex 셀렉(드롭박스)으로 구현 onechage로 값을 던져주면 다른 php 페이지에서 return id 값이 input.value = return -->
        </div>
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">영화관 구분</label>
            <select name="theater_name" class="select_type" >
<?php
$sql = "select theater_name  From theater_info where theater_cityCode = '$city_name'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
$theater_name = $row['theater_name'];
$theater_idx = $row['theater_idx'];
?>
            <option value="<?=$theater_name?>" ><?=$theater_name?></option>
<?php
            };
?>
            </select>
            <!-- select 로 php로 돌려서 ajex 셀렉(드롭박스)으로 구현 onechage로 값을 던져주면 다른 php 페이지에서 return id 값이 input.value = return -->
        </div>
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">상영관 구분</label>
            <select name="room_info" class="select_type" >
<?php
$sql = "select theater_name  From room_info where room_theater = '$theater_idx'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
$room_name = $row['room_name'];
$room_theater = $row['room_theater'];
?>
            <option value="<?=$room_name?>" ><?=$room_name?></option>
<?php
};
?>
            </select>
        </div>
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">상영중 영화 구분</label>
            <select name="movie_info" class="select_type" >
<?php
$sql = "select M_Title from movie_info where DATE(NOW()) between date(M_Rel_DateS) and date(M_Rel_DateE)+1";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)){
$M_Title = $row['M_Title'];
?>
            <option value="<?=$M_Title?>" ><?=$M_Title?></option>
<?php
            };
?>
            </select>
        </div>
        <div class="form-group">
            <label for="inputRelease" class="col-sm-2 control-label">상영 시작일</label>
            <div class="col-sm-7">
            <input type="date" class="form-control" name="inputRelease" id="inputRelease" placeholder="영화의 상영 시작일을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputRelease" class="col-sm-2 control-label">상영 종료일</label>
            <div class="col-sm-7">
            <input type="date" class="form-control" name="inputRelease" id="inputRelease" placeholder="영화의 상영 종료일을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputRelease" class="col-sm-2 control-label">상영 시작 시간</label>
            <div class="col-sm-7">
            <input type="time" class="form-control" name="inputRelease" id="inputRelease" placeholder="영화의 상영일을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputRelease" class="col-sm-2 control-label">상영 종료 시간</label>
            <div class="col-sm-7">
            <input type="time" class="form-control" name="inputRelease" id="inputRelease" placeholder="영화의 상영일을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">등록</button>
        </div>
    </form>
</body>
</html>