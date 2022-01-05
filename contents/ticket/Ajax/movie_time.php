<?php
include "../../../admin/user_info/include/dbconn.php";

$Y_mov_code = $_GET['mov_code'];
$Y_theater_code = $_GET['theater_code'];
$Y_mov_date = $_GET['mov_date'];
$Y_text = '';

// echo $Y_mov_code.'&'.$Y_theater_code.'&'.$Y_mov_date;


if(!$conn){
    echo ("DB연결 실패");
  }else{
  $sql = "select * from movie_total_info where time_movie = '$Y_mov_code' and time_theater = '$Y_theater_code' and time_schedule <= '$Y_mov_date' and time_schedule_e >= '$Y_mov_date'";
    $result = mysqli_query($conn, $sql);
    $x = 0;
    while($row = mysqli_fetch_array($result)){
    $time_schedule =$row['time_schedule'];
    $room_name =$row['room_name'];
    $room_seat =$row['room_seat'];
    
    $Y_text = ' <div id="time_icon">
    <span class="morning">조조</span>
    <span class="night">심야</span>
        </div>
        <div class="time_seat">
            <div class="time_theater">
                <span class="move_type">2D</span>
                <span class="theater_room">시네엔포레</span>
                <span class="seat_count">(총34석)</span>

            </div>
        </div>
        <div class="time_List">
            <div class="time_seatList">
                <span class="time_point">11:15</span> 
                <span class="seat_countG">34석</span> 
            </div>
            <div class="time_seatList">
                <span class="time_point">11:15</span> 
                <span class="seat_countG">34석</span> 
            </div>
            <div class="time_seatList">
                <span class="time_point">11:15</span> 
                <span class="seat_countG">34석</span> 
            </div>
            <div class="time_seatList">
                <span class="time_point">11:15</span> 
                <span class="seat_countG">34석</span> 
            </div>
            <div class="time_seatList">
                <span class="time_point">11:15</span> 
                <span class="seat_countG">34석</span> 
            </div>
            <div class="time_seatList">
                <span class="time_point">11:15</span> 
                <span class="seat_countG">34석</span> 
            </div>
            <div class="time_seatList">
                <span class="time_point">11:15</span> 
                <span class="seat_countG">34석</span> 
            </div>
            

        </div>';
        

    }
   
    echo $Y_text;
    
  }

?>