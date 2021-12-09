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

if(exampleInputFile.value ==''){
    alert('사진을 등록하여 주세요.');
    exampleInputFile.focus();
    return false;
}

return true;
}
</script>
</head>
<body class="body">
    <h2>스케줄 등록</h2>
    <form class="form-horizontal" name="regform" id="regform" method="post" action="movieP.php" onsubmit="return sendit()" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">영화관 구분</label>
            <select id="sel" name="sort" >
                <option value="N" name="N" id="N" selected> 건대 입구
                <option value="O" name="O" id="O">강남
            </select>
            <!-- select 로 php로 돌려서 ajex 셀렉(드롭박스)으로 구현 onechage로 값을 던져주면 다른 php 페이지에서 return id 값이 input.value = return -->
        </div>
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">상영관 구분</label>
            <select id="sel" name="sort" >
                <option value="N" name="N" id="N" selected> 1관
                <option value="O" name="O" id="O">2관
                <option value="O" name="O" id="O">3관
            </select>
        </div>
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">상영중 영화 구분</label>
            <select id="sel" name="sort" >
                <option value="N" name="N" id="N" selected>어벤져스
                <option value="O" name="O" id="O">듄
                <option value="O" name="O" id="O">엔칸토-마법의 세계
            </select>
        </div>
        <div class="form-group">
            <label for="inputRelease" class="col-sm-2 control-label">상영일</label>
            <div class="col-sm-7">
            <input type="date" class="form-control" name="inputRelease" id="inputRelease" placeholder="영화의 상영일을 입력하세요">
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