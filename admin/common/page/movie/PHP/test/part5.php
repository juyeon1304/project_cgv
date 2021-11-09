
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="form-horizontal" name="testform" id="testform" method="post" action="part5P.php" onsubmit="return sendit()" enctype="multipart/form-data">
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

                <button class="btn btn-default" name="new_movie_btn" Type="submit" value="new_movie" stlye="
                position: relative;
                left : 15px;
                ">코드 입력</button>
            </div>
            
        </div>
    </form>
</body>
</html>
