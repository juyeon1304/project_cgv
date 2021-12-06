<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./css/movie.css" type="text/css" />
<!-- <script src="./js/movie.js"></script> -->
<script>
const sendit = function(){

const exampleInputFile = document.getElementById('exampleInputFile');
const inputTitle = document.getElementById('inputTitle');
const inputTitle_en = document.getElementById('inputTitle_en');
const inputGenre = document.getElementById('inputGenre');
const inputRelease = document.getElementById('inputRelease');
const inputSummary = document.getElementById('inputSummary');
const inputDirector = document.getElementById('inputDirector');
const inputActor = document.getElementById('inputActor');
const inputReleaseS = document.getElementById('inputReleaseS');
const inputReleaseE = document.getElementById('inputReleaseE');

if(exampleInputFile.value ==''){
    alert('사진을 등록하여 주세요.');
    exampleInputFile.focus();
    return false;
}
if(inputTitle.value ==''){
    alert('한글 영화 제목을 입력하세요');
    inputTitle.focus();
    return false;
}
if(inputTitle.value.length < 2 || inputTitle.value.length > 50){
        alert('제목을 2자이상 50자 이하로 입력하세요');
        inputTitle.focus();
        return false;
}
if(inputTitle_en.value ==''){
    alert('영문 영화 제목을 입력하세요');
    inputTitle_en.focus();
    return false;
}
if(inputTitle.value.length < 2 || inputTitle.value.length > 50){
        alert('제목을 2자이상 50자 이하로 입력하세요');
        inputTitle.focus();
        return false;
}
    let count = 0;
    for(let i in inputGenre){
        if(inputGenre[i].checked){
            count++;
        }
    }
    if(inputGenre == 0){
        alert('장르는 적어도 1개이상 선택하세요');
        inputGenre.focus();
        return false;
    }
    
if(inputRelease.value ==''){
    alert('영화 개봉일을 입력하세요');
    inputRelease.focus();
    return false;
}
if(inputSummary.value ==''){
    alert('영화 줄거리를 입력하세요');
    inputSummary.focus();
    return false;
}
if(inputSummary.value.length < 2 || inputSummary.value.length > 300){
    alert('줄거리를 2자이상 300자 이하로 입력하세요');
    inputSummary.focus();
    return false;
}
if(inputDirector.value ==''){
    alert('영화 감독을 입력하세요');
    inputDirector.focus();
    return false;
}
if(inputActor.value ==''){
    alert('영화 배우를 입력하세요');
    inputActor.focus();
    return false;
}
if(inputReleaseS.value ==''){
    alert('상영 시작일을 입력하세요');
    inputReleaseS.focus();
    return false;
}
if(inputReleaseE.value ==''){
    alert('상영 종료일을 입력하세요');
    inputReleaseE.focus();
    return false;
}

return true;
}
</script>
</head>
<body class="body">
    <h2>영화 등록</h2>
    <form class="form-horizontal" name="regform" id="regform" method="post" action="movieP.php" onsubmit="return sendit()" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">영화 코드</label>
            <select id="sel" name="sort" >
                <option value="N" name="N" id="N" selected> 신 영화
                <option value="O" name="O" id="O">구 영화
            </select>
            <!-- select 로 php로 돌려서 ajex 셀렉(드롭박스)으로 구현 onechage로 값을 던져주면 다른 php 페이지에서 return id 값이 input.value = return -->
        </div>
        </div>
        <div class="">
            <label for="exampleInputFile" class="col-sm-2 control-label">영화 사진</label>
            <input type="file" name="exampleInputFile" id="exampleInputFile" style="
                left : 6px;
                position: relative;
                padding: 4px 5px;
                border: 0.14em solid #ccc;
                border-radius: 4px;
                margin-bottom: 15px;
                cursor : pointer;
                z-index: 10;">
        </div>
        <div class="form-group">
            <label for="inputTitle" class="col-sm-2 control-label">영화 제목</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="inputTitle" id="inputTitle" placeholder="영화의 제목을 입력하세요. (50글자 미만)" maxlength="50">
            </div>
        </div>
        <div class="form-group">
            <label for="inputTitle_en" class="col-sm-2 control-label">영화 영문 제목</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="inputTitle_en" id="inputTitle_en" placeholder="영화의 영문 제목을 입력하세요.(50글자 미만)" maxlength="50">
            </div>
        </div>
        <div class="form-group">
            <label for="inputGenre" class="col-sm-2 control-label">장르</label>
            <div class="col-sm-7">
                <!-- DB로 테이블 별도로 만들어서 -->

                <label>SF <span>  </span>
                    <input type="checkbox" name="inputGenre[]" value="SF" />
                </label>
                <label>드라마 <span>  </span>
                    <input type="checkbox" name="inputGenre[]" value="드라마" />
                </label>
                <label>액션 <span>  </span>
                    <input type="checkbox" name="inputGenre[]" value="액션" />
                </label>
                <label>코미디 <span>  </span>
                    <input type="checkbox" name="inputGenre[]" value="코미디" />
                </label>
                <label>환타지 <span>  </span>
                    <input type="checkbox" name="inputGenre[]" value="환타지" />
                </label>
                <label>공포 <span>  </span>
                    <input type="checkbox" name="inputGenre[]" value="공포" />
                </label>
            </div>
        </div>
        <div class="form-group"> 
            <label for="inputBasics" class="col-sm-2 control-label">관람가</label>
            <div class="col-sm-7">
            <select name="inputBasics"> 
                <!-- mysql에서 테이블을 별도로 만들어서 불러오게끔 -->
                <option value="all">전체 관람가</option>
                <option value="12">12세 관람가</option>
                <option value="15">15세 관람가</option>
                <option value="19">19세 관람가</option>
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
            <input type="text" class="form-control" name="inputSummary" id="inputSummary" placeholder="영화의 줄거리를 입력하세요. (300글자 미만)" maxlength="300">
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