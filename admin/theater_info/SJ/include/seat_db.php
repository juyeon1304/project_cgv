<?php

//해당 좌석 정보 추출

$sql = "select seat_row from tb_sj_seat where theater_idx = $theater_idx";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$seat_row = $row['seat_row'];

$sql = "select seat_col from tb_sj_seat where theater_idx = $theater_idx";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$col = $row['seat_col'];

$sql = "select seat_NRline1 from tb_sj_seat where theater_idx = $theater_idx";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$nrline1 = $row['seat_NRline1'];

$sql = "select seat_NRline2 from tb_sj_seat where theater_idx = $theater_idx";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$nrline2 = $row['seat_NRline2'];

$sql = "select seat_NCline1 from tb_sj_seat where theater_idx = $theater_idx";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$ncline1 = $row['seat_NCline1'];

$sql = "select seat_NCline2 from tb_sj_seat where theater_idx = $theater_idx";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$ncline2 = $row['seat_NCline2'];

?>