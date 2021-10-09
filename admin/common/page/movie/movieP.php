<?php
    include "./include/dbconn.php";
    
    $Y_Code = $_POST["inputcode"];
    // $Y_File = $_POST["exampleInputFile"];
    $Y_Title = $_POST["inputTitle"];
    $Y_Title_en  = $_POST["inputTitle_en"];
    $Y_Genre  = $_POST["inputGenre"];
    $Y_Release  = $_POST["inputRelease"];
    $Y_Director   = $_POST["inputDirector"];
    $Y_Actor   = $_POST["inputActor"];
    echo $Y_Code;
    // M_Picture_Code,
    if(!$conn){
        echo "DB연결 실패!";
    }else{ 
        
    $sql = "INSERT INTO movie_info(M_Code,  M_Title, E_M_Title, M_Genre_Code,
    M_Summary, Dircetor_code, Actor_Code) VALUES ('$Y_Code', '$Y_Title', '$Y_Title_en', '$Y_Genre', '$Y_Release', '$Y_Director', '$Y_Actor')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
}
?>
<script>
    alert('영화 등록 성공!');
    location.href="./movie_info.php";
</script>