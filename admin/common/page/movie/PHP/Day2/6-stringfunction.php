<?php
    $str1 = "abcdefghijklmn12345";
    $str2 = "가나다라마바사아자차카타파하";
    $str3 = "Hello/PHP/Hello/World";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문자열 함수</title>
</head>
<body>
    <h2>문자열 함수</h2>
<?php
    // php는 영문자, 숫자, 특수문자는 1byte, 한글 3byte
    echo strlen($str1)."<br>";  // 19
    echo strlen($str2)."<br>";  // 42
    echo "<br>";

    // 첫번째 매개변수가 두번째 매개변수보다 크면 양수, 작으면 음수를 반환
    echo strcmp("abc", "ABC")."<br>";   // 1
    echo strcmp("10", "2")."<br>";      // -1
    echo strcmp("abc", "abc")."<br>";   // 0
    echo "<br>";

    echo strstr($str1, "cd")."<br>";
    echo "<br>";

    echo strpos($str1, "abc")."<br>";
    echo "<br>";

    echo substr($str1, 3)."<br>";
    echo substr($str1, -3)."<br>";
    echo substr($str1, 3, 10)."<br>";

    $arr = explode("/", $str3);
    // Hello/PHP/Hello/World
    // $arr[0] = "Hello", $arr[1] = "PHP", $arr[2] = "Hello", $arr[3] = "World";
    foreach($arr as $str){
        echo $str." ";
    }
    echo("<br>");

    echo("<br>");
    echo str_replace("o", "🎃", $str3)."<br>";

?>
</body>
</html>