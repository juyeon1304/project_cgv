
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal" name="testform" id="testform" method="post" action="part1P.php" onsubmit="return sendit()" enctype="multipart/form-data">
    <div class="form-group">
            <label for="inputCode" class="col-sm-2 control-label">영화 코드</label>
            <select id="sel" name="sort" >
                <option value="N" name="N" id="N" selected> 신 영화
                <option value="O" name="O" id="O">구 영화
            </select>
            <!-- select 로 php로 돌려서 ajex 셀렉(드롭박스)으로 구현 onechage로 값을 던져주면 다른 php 페이지에서 return id 값이 input.value = return -->
            <button class="btn btn-default" name="new_movie_btn" Type="submit" value="new_movie" stlye="
            position: relative;
            left : 15px;
            ">코드 입력</button>
        </div>
    </form>
</body>
</html>
