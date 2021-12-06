<?php
include "./include/dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>