<?php
include "./include/dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영화관 조회</title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet"  href="./css/movie_info.css" type="text/css"> -->
    <!-- <script type="text/javascript" src="./js/movie_info.js"></script> -->
</head>
<body class="body">
    <h2>영화관 조회</h2>
    <form action="theater-chk.php" method="post">
    <section>
        <div class="col-md-11">
            <table class="table table-condensed">
                <thead>
                <tr class="h4">
                    <th>코드</th>
                    <th>영화관</th>
                    <th>주소</th>
                    <th>전화번호</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php
                    $sql = 'select * from theater_info';
                    $result = mysqli_query($conn, $sql);
                    $arr_count = 0;
                    // $row = mysqli_fetch_array($result);

                    
                    while($row = mysqli_fetch_array($result)){

                        
                        $theaterIdx = $row['theater_idx'];
                        $theaterName = $row['theater_name'];
                        $theaterZipcode = $row['theater_zipcode'];
                        $theaterAddr1 = $row['theater_addr1'];
                        $theaterAddr2 = $row['theater_addr2'];
                        $theaterAddr3 = $row['theater_addr3'];
                        $theaterTel = $row['theater_tel'];

                    ?>
                
                    
                    <tr class="" style="">
                        <td class="theater_info1"><?=$theaterIdx?></td>
                        <td class="theater_info3"><a href="./theater-manage.php" target="content"><?=$theaterName?></a></td>
                        <td class="theater_info3"><span><?=$theaterZipcode?></span> <?=$theaterAddr1?> <?=$theaterAddr2?> <?=$theaterAddr3?></td>
                        <td class="theater_info4"><?=$theaterTel?></td>
                        <td>
                        <button name="Del_button" type="submit" value="delete" class="btn btn-default">삭제</button></td>
                    </tr>
                <?php
                 $arr_count++;
                };
                ?>
                </tbody>
            </table>
        </div>
    </section>
    </form>
    <div id="text"></div>
</body>
</html>