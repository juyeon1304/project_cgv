<?php
include "../include/dbconn.php";

// theater_idx 가져옴 
if(!isset($_GET['theater_idx'])){
    echo "<script>alert('잘못된 접근'); location.href='./theater-chk.php';</script>";
}
$theater_idx = $_GET['theater_idx'];


//해당 영화관 이름 추출
$sql = "select theater_name from theater_info where theater_idx = $theater_idx";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

$theater_name = $row['theater_name'];


include "../include/seat_db.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>좌석 조회</title>
    <script>
    var row = Number("<?php echo $seat_row; ?>");
    var col = Number("<?php echo $col; ?>");

    const nrline1 = Number("<?php echo $nrline1; ?>");
    const nrline2 = Number("<?php echo $nrline2; ?>");

    const ncline1 = Number("<?php echo $ncline1; ?>");
    const ncline2 = Number("<?php echo $ncline2; ?>");
    </script>
    <script src="../js/seatSJ.js"></script>
    <link rel="stylesheet" href="../css/seatset.css" type="text/css" />
</head>
<body>
    <h2>좌석 조회 - 영화관 idx:[<?=$theater_idx?>] </h2>
    <ul>
        <li>
            <strong>Row</strong>
            <p>행 : <?=$seat_row?></p>
        </li>
    </ul>
    <ul>
        <li>
            <strong>Col</strong>
            <p>열 : <?=$col?></p>
        </li>
    </ul>
    <ul>
        <li>
            <strong>NRline</strong>
            <p>복도(1) - 행 : <?=$nrline1?></p>
        </li>
    </ul>
    <ul>
        <li>
            <strong>NRline</strong>
            <p>복도(2) - 행 : <?=$nrline2?></p>
        </li>
    </ul>
    <ul>
        <li>
            <strong>NCline</strong>
            <p>복도(1) - 열 : <?=$ncline1?></p>
        </li>
    </ul>
    <ul>
        <li>
            <strong>NCline</strong>
            <p>복도(2) - 열 : <?=$ncline2?></p>
        </li>
    </ul>
    <div id="container"></div>
</body>
</html>