<?php
    include "./include/dbconn.php";
    
    $inputcode = $_POST["inputcode"];
    $exampleInputFile = $_POST["exampleInputFile"];
    $inputTitle = $_POST["inputTitle"];
    $inputTitle_en  = $_POST["inputTitle_en"];
    $inputGenre  = $_POST["inputGenre"];
    $inputRelease  = $_POST["inputRelease"];
    $inputDirector   = $_POST["inputDirector"];
    $inputActor   = $_POST["inputActor"];

    if(!$conn){
        echo "DB연결 실패!";
    }else{
        $sql = "INSERT INTO Movie_info (M_Code, M_Picture_Code, M_Title, E_M_Title, M_Genre_Code, M_Rel_Date, 
        M_Summary, Dircetor_code, Actor_Code) VALUES ('$inputcode', '$exampleInputFile', '$inputTitle', '$inputTitle_en', '$inputGenre', '$inputRelease', '$inputDirector', '$inputActor')";
        $result = mysqli_query($conn, $sql);
    }
?>
<script>
    alert('영화 등록 성공!');
    location.href="../";
</script>