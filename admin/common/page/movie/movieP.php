<?php
    include "./include/dbconn.php";
    
// --------------영화 코드 설정 start------------------
    if(isset($_GET["A"])){
        $city_code = $_GET["A"]; 
        $sql ="select max(M_Code) from movie_info LIKE 'A%';";
        $result = mysqli_query($conn, $sql);
        while($row = mysql_fetch_arry($result)){
            $max1_code = $row['MAX(M_Code)'];
            $A_Code = $max1_code + 1;
            $X_movie_code = $_POST["A_Code"];
    }//if end
    if(isset($_GET["P"])){
        $city_code = $_GET["P"]; 
        $sql ="select max(M_Code) from movie_info LIKE 'A%';";
        $result = mysqli_query($conn, $sql);
        while($row = mysql_fetch_arry($result)){
            $max2_code = $row['MAX(M_Code)'];
            $P_Code = $max2_code + 1;
            $X_movie_code = $_POST["P_Code"];
    }//if end
// --------------영화 코드 설정 end------------------
// --------------img 파일 저장 경로 설정 start------------------
    
    if($_FILES['exampleInputFile']['tmp_name']){
        $uploads_dir = "./file";
        $allowd_ext = array('jpg','jpeg','png','gif','bmp');
        // $error = $_FILES['exampleInputFile']['error'];
        $name = $_FILES['exampleInputFile']['name'];
        $ext = explode('.',$name); // explode()는 문자열을 분할하여 배열로 저장하는 함수

        $rename = $ext[0].time(); // @@ 중복 체크(셀렉문) + 파일삭제(언링크<파일명+경로>)
        $rename = $rename.".".$ext[1]; 

        $ext = strtolower(array_pop($ext)); //strtolower()는 대문자를 소문자로 변환하는 함수
        $filepath = $uploads_dir."/".$rename;
        if(!in_array($ext,$allowd_ext)){
            echo "이미지 없이 등록되었습니다.";
            $filepath = $uploads_dir."/.noimg.jpg"; 
            exit;
        }
        move_uploaded_file($_FILES['exampleInputFile']['tmp_name'],$filepath);
        echo $filepath;
    } // 
// --------------img 파일 저장 경로 설정 end------------------

    $X_Title = $_POST["inputTitle"]; //4
    $X_Title_en  = $_POST["inputTitle_en"]; //5
// ------------------part 5 start----------------------------    
    $checks  = $_POST["inputGenre"]; //6~8    @@ foreach($_post) as 저장 할 변수 값 { arr=x."," } -- 첫 콤마는 안들어가게끔 장치, substring 마지막 콤마 지워주기, lastinthestring 으로 마지막 콤마를 찾고 ...
    $checksstr = "";
    foreach($checks as $h){
        $checksstr .= $h.", ";
    }
    substr($checksstr, 0, -1);
// ------------------part 5 end----------------------------  
    $X_Runtime  = $_POST["inputRuntime"]; //9
    $X_Basics  = $_POST["inputBasics"]; //9
    $X_Release  = $_POST["inputRelease"]; //10
    $X_Summary  = $_POST["inputSummary"]; //11
    $X_Director   = $_POST["inputDirector"]; //12
    $X_Actor   = $_POST["inputActor"]; //13
    $X_ReleaseS   = $_POST["inputReleaseS"]; //14
    $X_ReleaseE   = $_POST["inputReleaseE"]; //15



    if(!$conn){
        echo "DB연결 실패!";
    }else{
    $sql = "INSERT INTO movie_info(
        M_Code, 
        M_Picture_Code, 
        M_Title, 
        E_M_Title, 
        M_Genre_Code, 
        M_run, 
        M_Basics, 
        M_Rel_Date, 
        M_Summary, 
        Dircetor_code, 
        Actor_Code, 
        M_Rel_DateS, 
        M_Rel_DateE) VALUES (
            '$X_movie_code', 
            '$filepath', 
            '$X_Title', 
            '$X_Title_en', 
            '$checksstr', 
            '$X_Runtime', 
            '$X_Basics', 
            '$X_Release', 
            '$X_Summary', 
            '$X_Director', 
            '$X_Actor', 
            '$X_ReleaseS', 
            '$X_ReleaseE')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
}
?>

<script>
    alert('영화 등록 성공!');
    location.href="./movie_info.php";
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영화 등록 완료</title>
</head>
<body>
<h2>영화 등록 완료</h2>
    <p>M_Code : <?=$X_movie_code?></p>
    <p>M_Picture_Code : <?=$filepath?></p>
    <p>M_Title : <?=$X_Title?></p>
    <p>E_M_Title : <?=$X_Title_en?></p>
    <p>M_Genre_Code : <?=$checksstr?></p>
    <p>M_run : <?=$X_Runtime?></p>
    <p>M_Basics : <?=$X_Basics?></p>
    <p>M_Rel_Date : <?=$X_Release?></p>
    <p>M_Summary : <?=$X_Summary?></p>
    <p>Dircetor_code : <?=$X_Director?></p>
    <p>Actor_Code : <?=$X_Actor?></p>
    <p>M_Rel_DateS : <?=$X_ReleaseS?></p>
    <p>M_Rel_DateE : <?=$X_ReleaseE?></p>
</body>
</html>