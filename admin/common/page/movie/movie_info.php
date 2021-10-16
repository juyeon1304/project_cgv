<?php
include "./include/dbconn.php";

    if(isset($_POST['x_search_btn'])){

        $y_search = $_POST['x_search'];
        $y_search_btn = $_POST['x_search_btn'];
    
    
        // echo "$y_search_btn";
    }
    
    $sql = 'select count(info_seq) as total_user From movie_info';
    $result = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie List</title>
    <!-- 합쳐지고 최소화된 최신 CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- 부가적인 테마 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet"  href="./css/movie_info.css" type="text/css">
    <script type="text/javascript" src="./js/movie_info.js"></script>
    <style>
        th, td { text-align : center; align-items: center; }
    </style>
</head>
<body class="body">
    <div class="form" style="
    position: relative;
    width: auto; height: auto;
    padding-top: 20px; padding-left: 20px; padding-bottom : 40em;
    overflow-y : auto;
    ">
        <h2>movie List</h2>
        <form action="movie_info.php" method="post"> 
        <!-- <nav>
            <div class="info_btn">
                <?php
                if(isset($_POST['x_search_btn'])){
                $y_search = $_POST['x_search'];
                }else{
                    $y_search = '';
                }
                ?>
                <input id="search_input" type="text" name="x_search" value="<?=$y_search?>" />
                <button name="x_search_btn" class="user_del"  type="submit" value="search">확인</button>
                <button name="x_delete_btn" class="user_del" Type="submit" value="delete">삭제</button>
            </div>
        </nav> -->
        <section>
            <div class="col-md-11">
                <table class="table table-condensed" style="position: absolute; top : 0px;">
                    <tr class="h4">
                        <th>코드</th>
                        <th style="width: 120px">이미지</th>
                        <th>제목</th>
                        <th>영문 제목</th>
                        <th>장르</th>
                        <th>관람가</th>
                        <th style="width: 110px">개봉일</th>
                        <!-- <th class="" style="width: 100px">줄거리</th> -->
                        <th>감독</th>
                        <th>배우</th>
                        <th>시작일</th>
                        <th>종료일</th>
                        <th>등록일</th>
                    </tr>
                    <?php
                        
                        if(isset($_POST['x_search_btn'])){
                            $y_search = $_POST['x_search'];
                            $sql = "select * From movie_info where M_Title like '%$y_search%'";
                        }else{
                            $sql = 'select * From movie_info';
                        }
                        
                        $result = mysqli_query($conn, $sql);
                        $arr_count = 0;
                        while($row = mysqli_fetch_array($result)){
                            $m_cord = $row['M_Code'];
                            $m_picture_code = $row['M_Picture_Code'];
                            $m_title = $row['M_Title'];
                            $e_m_title = $row['E_M_Title'];
                            $m_genre_code = $row['M_Genre_Code'];
                            $m_basics = $row['M_Basics'];
                            $m_rel_Date = $row['M_Rel_Date'];
                            $m_summary = $row['M_Summary'];
                            $dircetor_code = $row['Dircetor_code'];
                            $actor_code = $row['Actor_Code'];
                            $m_rel_dates = $row['M_Rel_DateS'];
                            $m_rel_datee = $row['M_Rel_DateE'];
                            $info_reg_date = $row['movie_reg_date'];
                    ?><!--  -->
                    <tr class="h5" style="height: 50px !important; overflow: hidden !important;">
                        <td class="movie_info2"><?=$m_cord?></td>
                        <div style="width: 120px; height: 90px; overflow: hidden;">
                            <td class="movie_info2"><img src="./file/<?=$m_picture_code?>" style="width: auto; height: 60px;"  alt="image"></td>
                        </div>
                        <td class="movie_info4"><?=$m_title?></td>
                        <td class="movie_info5"><?=$e_m_title?></td>
                        <td class="movie_info6"><?=$m_genre_code?></td>
                        <td class="movie_info9"><?=$m_basics?></td>
                        <td class="movie_info10"><?=$m_rel_Date?></td>
                        <!-- <td class="movie_info11"><?=$m_summary?></td> -->
                        <td class="movie_info12"><?=$dircetor_code?></td>
                        <td class="movie_info13"><?=$actor_code?></td>
                        <td class="movie_info14"><?=$m_rel_dates?></td>
                        <td class="movie_info15"><?=$m_rel_datee?></td>
                        <td class="movie_info16"><?=$info_reg_date?></td>
                    </tr>
                    <?php
                    $arr_count++;
                    };
                    ?>
                </table>
            </div>
        </section>
        </form>
        <div id="text"></div>
    </div>
</body>
</html>