<?php
include "../include/dbconn.php";

    $idx = $_POST["idx"]; 
    $row = $_POST["seat_row"]; 
    $col = $_POST["seat_col"]; 

    $nrline1 = $_POST["null_row1"]; 
    $nrline2 = $_POST["null_row2"]; 

    $ncline1 = $_POST["null_col1"]; 
    $ncline2 = $_POST["null_col2"]; 

    if(!$conn){
        echo "DB연결 실패!";
    }else{ 

    $sql = "INSERT INTO tb_sj_seat( theater_idx, seat_row, seat_col, seat_NRline1, seat_NRline2, seat_NCline1, seat_NCline2) VALUES ( '$idx', '$row', '$col', '$nrline1', '$nrline2', '$ncline1', '$ncline2')";

    $result = mysqli_query($conn, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>상영관 등록</title>
    <script>
    var row = Number("<?php echo $row; ?>");
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
    <h2>3단계 좌석 세팅 - 영화관 idx:[<?=$idx?>] </h2>
    <ul>
        <li>
            <strong>Row</strong>
            <p>행 : <?=$row?></p>
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