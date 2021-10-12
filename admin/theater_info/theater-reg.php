
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영화관 등록</title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- 우편번호 찾기 스크립트 -->
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
        function sample6_execDaumPostcode() {
            new daum.Postcode({
                oncomplete: function(data) {
                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.
                    // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var addr = ''; // 주소 변수
                    var extraAddr = ''; // 참고항목 변수
                    //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                        addr = data.roadAddress;
                    } else { // 사용자가 지번 주소를 선택했을 경우(J)
                        addr = data.jibunAddress;
                    }
                    // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                    if(data.userSelectedType === 'R'){
                        // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                        // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                        if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                            extraAddr += data.bname;
                        }
                        // 건물명이 있고, 공동주택일 경우 추가한다.
                        if(data.buildingName !== '' && data.apartment === 'Y'){
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                        if(extraAddr !== ''){
                            extraAddr = ' (' + extraAddr + ')';
                        }
                        // 조합된 참고항목을 해당 필드에 넣는다.
                        document.getElementById("sample6_extraAddress").value = extraAddr;
                    } else {
                        document.getElementById("sample6_extraAddress").value = '';
                    }
                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('sample6_postcode').value = data.zonecode;
                    document.getElementById("sample6_address").value = addr;
                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById("sample6_detailAddress").focus();
                }
            }).open();
        }
        </script>
        <script src='/admin/theater_info/js/theater.js'></script>
</head>
<body class="body" style="">
    <h2>영화관 등록</h2>
    <form class="form-horizontal" name="regform" id="regform" method="post" action="theater-regP.php" onsubmit="return sendit()">
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">영화관 이름</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="inputName" id="inputName" maxlength="100" placeholder="새로 등록할 영화관 이름을 입력해주세요.">
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">영화관 주소</label>
            <div class="col-sm-7">
                <p>
                    <label><input type="text" name="zipcode" class="form-control" id="sample6_postcode"></label>
                    <button type="button" class="btn btn-default" onclick="sample6_execDaumPostcode()">우편번호 검색</button>
                </p>
                <p><label>주소<input type="text" class="form-control" name="inputAddr1" id="sample6_address"></label></p>
                <p><label>상세주소<input type="text" class="form-control" name="inputAddr2" id="sample6_detailAddress"></label></p>
                <p><label>참고항목<input type="text" class="form-control" name="inputAddr3" id="sample6_extraAddress"></label></p>
            </div>
        </div>
        <div class="form-group">
            <label for="inputTel" class="col-sm-2 control-label">영화관 전화번호</label>
            <div class="col-sm-7">
            <input type="text" class="form-control" name="inputTel" id="inputTel" placeholder="영화관 전화번호를 입력해주세요.(숫자만 입력)">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">등록</button>
        </div>
    </form>
</body>
</html>