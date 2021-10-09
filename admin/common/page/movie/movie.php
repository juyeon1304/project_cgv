<?php
include "./include/dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영화 등록</title>
<!-- 합쳐지고 최소화된 최신 CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- 부가적인 테마 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<!-- 합쳐지고 최소화된 최신 자바스크립트 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src='./js/movie.js'></script>
<link rel="stylesheet" href="./css/movie.css">
</head>
<body class="body" style="">
    <h2>영화 등록</h2>
    <form class="form-horizontal" name="regform" id="regform" method="post" action="movieP.php" onsubmit="return sendit()">
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">영화 코드</label>
            <div class="col-sm-7">
            <input type="mov_code" class="form-control" name="inputcode" id="inputcode" maxlength="100" placeholder="영화의 코드를 입력하세요">
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputFile" class="col-sm-2 control-label">영화 사진</label>
            <label for="exampleInputFile">파일 업로드</label>
            <input type="file" name="exampleInputFile" id="exampleInputFile">
        </div> -->
        <div class="form-group">
            <label for="inputTitle" class="col-sm-2 control-label">영화 제목</label>
            <div class="col-sm-7">
            <input type="mov_tit" class="form-control" name="inputTitle" id="inputTitle" placeholder="영화의 제목을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputTitle_en" class="col-sm-2 control-label">영화 영문 제목</label>
            <div class="col-sm-7">
            <input type="mov_tit_en" class="form-control" name="inputTitle_en" id="inputTitle_en" placeholder="영화의 영문 제목을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputGenre" class="col-sm-2 control-label">장르</label>
            <div class="col-sm-7">
            <input type="mov_genre" class="form-control" name="inputGenre" id="inputGenre" placeholder="영화의 장르를 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputRelease" class="col-sm-2 control-label">개봉일</label>
            <div class="col-sm-7">
            <input type="mov_release" class="form-control" name="inputRelease" id="inputRelease" placeholder="영화의 개봉일을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputDirector" class="col-sm-2 control-label">영화 감독</label>
            <div class="col-sm-7">
            <input type="mov_director" class="form-control" name="inputDirector" id="inputDirector" placeholder="영화의 감독을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputActor" class="col-sm-2 control-label">영화 배우</label>
            <div class="col-sm-7">
            <input type="mov_actor" class="form-control" name="inputActor" id="inputActor" placeholder="영화의 배우를 입력하세요">
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