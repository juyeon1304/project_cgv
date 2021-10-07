<?php
    // $query = $_GET["q"];
    $query = $_POST["q"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>검색</title>
</head>
<body>
    <h2>검색</h2>
    <p>검색어로 입력한 단어는 '<?=$query?>' 입니다.</p>
</body>
</html>