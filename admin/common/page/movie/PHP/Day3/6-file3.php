<?php
    $result = "";
    $lines = @file("tel.txt") or $result = "파일을 읽을 수 없습니다";
    /*
        $lines[0] = "김사과,010-1111-1111,서울 서초구"
        $lines[1] = "반하나,010-2222-2222,서울 강남구"
        $lines[2] = "오렌지,010-3333-3333,서울 동작구"
        $lines[3] = "이메론,010-4444-4444,서울 금천구"
    */
    if($lines != null){
        for($i=0; $i<count($lines); $i++){
            $result .= "<tr>";
            $arr = explode(",", $lines[$i]);    
            // $arr[0] = "김사과", $arr[1] = "010-1111-1111", $arr[2] = "서울 서초구"
            for($j=0; $j<count($arr); $j++){
                $result .= "<td>{$arr[$j]}</td>";
            }
            $result .="</tr>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 - 3</title>
    <style>
        table { width: 600px; border-collapse: collapse; }
        th, td { height: 30px; border: 1px solid red; }
    </style>
</head>
<body>
    <h2>파일 - 3</h2>
    <table>
        <tr>
            <th>이름</th>
            <th>연락처</th>
            <th>주소</th>
        </tr>
        <?=$result?>
    </table>
</body>
</html>