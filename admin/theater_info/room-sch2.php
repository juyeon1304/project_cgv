<?php
include "./include/dbconn.php";


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
<script src="./js/room-sch2.js" ></script>
<script>
window.addEventListener("load", function(e) {
    let city_code = document.getElementById('city_name').value;
    getTheater(city_code);
    // let theater_code = document.getElementById('theater_name').value;

    console.log('ddd');

    
});
</script>
</head>
<body>
    <h2>스케줄 등록2</h2>
    <form class="form-horizontal" name="regform" id="regform" method="post" action="./room-sch.php" onsubmit="return sendit()" >
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">지역별 구분</label>
            <select name="city_name" id="city_name" class="city_name select_type" onchange="getTheater(this.value)">
                <?php
                    $sql = "select city_code, city_name from city_info order by city_name ASC";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)){
                        $city_code = $row['city_code'];
                        $city_name = $row['city_name'];
                ?>
                <option value="<?=$city_code?>"><?=$city_name?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">영화관 구분</label>
            <select name="theater_name" id="theater_name" class="select_type" onchange="getRoom(this.value)">

            </select>
        </div>
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">상영관 구분</label>
            <select name="room_name" id="room_name" class="select_type" >
            </select>
        </div>
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">상영중 영화 구분</label>
            <select name="movie_info" class="select_type" >

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