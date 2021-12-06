<?php
    include "./include/dbconn.php";

    $NorO = $_POST["sort"];
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

<?php
    echo("<h3>".$NorO."이 입력 되었습니다.</h3>");
?>
<P> 입력 값 : <?=$NorO?></p>

<script>
    'use strict'
    let str=0;

    if(<?=$NorO?>= 'N'){
        str=N'-';
    }else if(<?=$NorO?>= 'O'){
        str=O'-';
    }
    echo
</script>

<?php 
    $sql ='select max(M_Code) from part1;';
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $max_code = $row['max(M_Code)'];
?>

<P> 코드 max 값 : <?=$max_code?></p>

<?php 
    $last_code = $max_code + 1;
?>
<P> 코드 max 값에 1을 더한 값 : <?=$last_code?></p>


<script>
    alert('등록 성공');
</script>
</body>
</html>
<?php
    $X_Code = $last_code; //4
    $sql = "INSERT INTO part1(mov_type, M_Code) VALUES ('$NorO', '$X_Code')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
?>