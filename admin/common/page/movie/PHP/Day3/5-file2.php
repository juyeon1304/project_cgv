<?php
    $result = "";
    $lines = @file("data.txt") or $result = "파일을 가져올 수 없습니다";
/*
    $lines[0] = "안녕하세요. php 파일 예제입니다.";
    $lines[1] = "휴가도 끝나고 무슨 낙으로 살까요?";  
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 - 2</title>
</head>
<body>
    <h2>파일 - 2</h2>
    <?php
        if($lines != null){
            for($i=0; $i<count($lines); $i++){
                $result .= $lines[$i]."<br>";
            }
        }
    ?>
    <p><?=$result?></p>
</body>
</html>