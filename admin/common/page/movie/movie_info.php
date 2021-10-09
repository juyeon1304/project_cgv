<?php
include "./include/dbconn.php";

    if(isset($_POST['x_search_btn'])){

        $y_search = $_POST['x_search'];
        $y_search_btn = $_POST['x_search_btn'];
    
    
        // echo "$y_search_btn";
    }else{
        $y_search = '';
    }
    if(isset($_POST['x_delete_btn'])){
        if(isset($_POST['x_user_idx'])){
            $y_user_idx = $_POST['x_user_idx'];
            foreach($y_user_idx as $i){
                $y_user_idx = $i;
                $sql = "delete from movie_info where info_seq='$y_user_idx'";
                $result = mysqli_query($conn, $sql);
                // echo "$y_user_idx";
            }
            
        }
        $y_delete_btn = $_POST['x_delete_btn'];
    
    }else{
        $y_search = '';
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
    <link rel="stylesheet"  href="./css/movie_info.css" type="text/css" />
    <script type="text/javascript" src="./js/movie_info.js"></script>
</head>
<body class="body">
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
            <table class="table table-condensed">
                <tr>
                    <!-- <th>movie cord</th> -->
                    <th>movie title</th>
                    <th>movie title_en</th>
                    <th>genre</th>
                    <th>rel date</th>
                    <th>summary</th>
                    <th>dircetor</th>
                    <th>actor</th>
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
                        // $m_cord = $row['M_code'];
                        // $m_picture_tode = $row['M_Picture_Code'];
                        $m_title = $row['M_Title'];
                        $e_m_title = $row['E_M_Title'];
                        $m_genre_code = $row['M_Genre_Code'];
                        $m_rel_Date = $row['M_Rel_Date'];
                        $m_summary = $row['M_Summary'];
                        $aircetor_code = $row['Dircetor_code'];
                        $actor_code = $row['Actor_Code'];
                ?>
                <tr>
                    <!-- <td class="movie_info1"><?=$m_cord?></td> -->
                    <!-- <td class="movie_info2"><?=$m_picture_tode?></td> -->
                    <td class="movie_info3"><?=$m_title?></td>
                    <td class="movie_info4"><?=$e_m_title?></td>
                    <td class="movie_info5"><?=$m_genre_code?></td>
                    <td class="movie_info6"><?=$m_rel_Date?></td>
                    <td class="movie_info7"><?=$m_summary?></td>
                    <td class="movie_info8"><?=$aircetor_code?></td>
                    <td class="movie_info9"><?=$actor_code?></td>
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
</body>
</html>