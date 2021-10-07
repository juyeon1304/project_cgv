<?php
    $fs = "";
    $fs = @fopen("tel.txt", "r") or exit("break");
    $result = "";

    while(!feof($fs)){
        $result .= fgets($fs, 10); // 10byte씩 읽음
    }
    fclose($fs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 - 4</title>
</head>
<body>
    <h2>파일 - 4</h2>
    <p><?=$result?></p>
</body>
</html>