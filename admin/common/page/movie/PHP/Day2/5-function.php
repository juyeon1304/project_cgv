<?php
    include "./lib/function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>함수</title>
</head>
<body>
    <h2>함수</h2>
    <?php
        hello();
        hello();

        sum(10, 3);
        sum(5, 2);

        $result = getSum(10, 5);
        echo "result : {$result}";
    ?>  
</body>
</html>