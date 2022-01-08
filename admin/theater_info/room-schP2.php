<?php
    include "./include/dbconn.php";

    if(!$conn){
        echo "DB연결 실패!";
    }else{ 

        if(isset($_GET["city_code"])){
            $city_code = $_GET["city_code"]; 

           $sql = "select theater_idx, theater_name from theater_info where theater_cityCode = '$city_code'";
           $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $theater_name = $row['theater_name'];
                $theater_idx = $row['theater_idx'];
                echo "<option value=$theater_idx>".$theater_name."</option>";
            }
        }//if end


        if(isset($_GET["theater_code"])){
            $theater_code = $_GET["theater_code"]; 

           $sql = "select room_name from room_info where room_theater = '$theater_code'";
           $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                $room_name = $row['room_name'];
                echo "<option value=$room_name>".$room_name."</option>";
            }
        }//if end


    }//else end




?>
