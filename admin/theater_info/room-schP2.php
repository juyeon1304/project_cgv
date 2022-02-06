<?php
    include "./include/dbconn.php";

    if(!$conn){
        echo "DB연결 실패!";
    }else{ 

        if(isset($_GET["city_code"])){
            
            $city_code = $_GET["city_code"]; 
            echo  $city_code;
           $sql = "select theater_idx, theater_name from theater_info where theater_cityCode = '$city_code' order by theater_name ASC";

           $result = mysqli_query($conn, $sql);
           $theater_all_text = '';

           $x = 1;

            while($row = mysqli_fetch_array($result)){
                $theater_name = $row['theater_name'];
                $theater_idx = $row['theater_idx'];
                if($x == 1){
                $theater_all_text = $theater_all_text."<option selected value=$theater_idx>".$theater_name."</option>";
                }else{
                    $theater_all_text= $theater_all_text."<option value=$theater_idx>".$theater_name."</option>";
                }
                // echo "<option value=$theater_idx>".$theater_name."</option>";
                $x++;
            }
            echo $theater_all_text;

        }//if end


        if(isset($_GET["theater_code"])){
            $theater_code = $_GET["theater_code"]; 
            $room_all_text = '';
           $sql = "select room_name, room_idx from room_info where room_theater = '$theater_code'";
           $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $room_name = $row['room_name'];
                $room_idx = $row['room_idx'];
                $room_all_text = $room_all_text."<option value=$room_idx>".$room_name."</option>";
            }
            echo $room_all_text;
        }//if end


        if(isset($_GET["movie_code"])){
            $movie_code = $_GET["movie_code"]; 
            $run_all_text = '';
           $sql = "select M_run from movie_info where M_Code = '$movie_code'";
           $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $movie_run = $row['M_run'];
                // $run_all_text = $movie_run;
            }
            
            echo $movie_run;
        }//if end


    }//else end


    
    
?>
