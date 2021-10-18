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
<link rel="stylesheet" href="../css/movie.css" type="text/css">
</head>
<body class="body" style="">
    <h2>영화 등록</h2>
    <form class="form-horizontal" name="regform" id="regform" method="post" action="movieP.php" onsubmit="return sendit()" enctype="multipart/form-data">
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">영화 코드</label>
            <div class="col-sm-2">

<!-- $sql = 'select M_Code from movie_info order by M_Code desc limit 1';
$result = mysqli_query($conn, $sql);
$arr_count = 0;
while($row = mysqli_fetch_array($result)){
$m_cord = $row['M_Code']; -->

                <input type="text" class="form-control" name="inputcode" id="inputcode" maxlength="100" >
                <!-- value="<=$m_cord?>" 
                placeholder="<=$m_cord?>" -->
            </div>
            <!-- <button class="btn btn-default" name="new_movie_btn" Type="submit" value="new_movie">코드 입력</button> -->
        </div>
        <div class="">
            <label for="exampleInputFile" class="col-sm-2 control-label">영화 사진</label>
            <label for="exampleInputFile" style="
                position: relative;
                padding: 4px 40px;
                border: 0.14em solid #ccc;
                border-radius: 4px;
                margin-bottom: 15px;
                left: 5px;
                cursor : pointer;
                z-index: 10;">업로드</label>
            <input type="file" name="exampleInputFile" id="exampleInputFile" style="
                display:none;"
            >
        </div>
        <div class="form-group">
            <label for="inputTitle" class="col-sm-2 control-label">영화 제목</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="inputTitle" id="inputTitle" placeholder="영화의 제목을 입력하세요. (50글자 미만)">
            </div>
        </div>
        <div class="form-group">
            <label for="inputTitle_en" class="col-sm-2 control-label">영화 영문 제목</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="inputTitle_en" id="inputTitle_en" placeholder="영화의 영문 제목을 입력하세요.(50글자 미만)">
            </div>
        </div>
        <div class="form-group">
            <label for="inputGenre" class="col-sm-2 control-label">장르</label>
            <div class="col-sm-7">
            <input type="checkbox" id="inputGenre" name="inputGenre" /><span>  </span><label for="c1" value="SF">SF</label>
            <input type="checkbox" id="inputGenre" name="inputGenre" /><span>  </span><label for="c2" value=", 드라마">드라마</label>
            <input type="checkbox" id="inputGenre" name="inputGenre" /><span>  </span><label for="c3" value=", 액션">액션</label>
            <input type="checkbox" id="inputGenre" name="inputGenre" /><span>  </span><label for="c4" value=", 코미디">코미디</label>
            <input type="checkbox" id="inputGenre" name="inputGenre" /><span>  </span><label for="c5" value=", 환타지">환타지</label>
            <input type="checkbox" id="inputGenre" name="inputGenre" /><span>  </span><label for="c6" value=", 공포">공포</label>
            </div>
        </div>
        <div class="form-group"> 
            <label for="inputBasics" class="col-sm-2 control-label">관람가</label>
            <div class="col-sm-7">
            <select name="inputBasics">
                <option value="전체">전체 관람가</option>
                <option value="12세">12세 관람가</option>
                <option value="15세">15세 관람가</option>
                <option value="19세">19세 관람가</option>
		    </select>
            </div>
        </div>
        <div class="form-group">
            <label for="inputRelease" class="col-sm-2 control-label">개봉일</label>
            <div class="col-sm-7">
            <input type="date" class="form-control" name="inputRelease" id="inputRelease" placeholder="영화의 개봉일을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputSummary" class="col-sm-2 control-label">영화 줄거리</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="inputSummary" id="inputSummary" placeholder="영화의 줄거리를 입력하세요. (300글자 미만)">
            </div>
        </div>
        <div class="form-group">
            <label for="inputDirector" class="col-sm-2 control-label">영화 감독</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="inputDirector" id="inputDirector" placeholder="영화의 감독을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputActor" class="col-sm-2 control-label">영화 배우</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="inputActor" id="inputActor" placeholder="영화의 배우를 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputReleaseS" class="col-sm-2 control-label">상영 시작일</label>
            <div class="col-sm-7">
            <input type="date" class="form-control" name="inputReleaseS" id="inputReleaseS" placeholder="영화의 시작일을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <label for="inputReleaseE" class="col-sm-2 control-label">상영 종료일</label>
            <div class="col-sm-7">
            <input type="date" class="form-control" name="inputReleaseE" id="inputReleaseE" placeholder="영화의 종료일을 입력하세요">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">등록</button>
        </div>
    </form>
</body>
</html>