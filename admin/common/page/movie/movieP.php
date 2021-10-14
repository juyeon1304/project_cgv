<?php
    include "./include/dbconn.php";
    
    $X_Code = $_POST["inputcode"]; //2
    $X_File = $_POST["exampleInputFile"]; //3
    $X_Title = $_POST["inputTitle"]; //4
    $X_Title_en  = $_POST["inputTitle_en"]; //5
    $X_Genre  = $_POST["inputGenre"]; //6~8
    $X_Basics  = $_POST["inputBasics"]; //9
    $X_Release  = $_POST["inputRelease"]; //10
    $X_Summary  = $_POST["inputSummary"]; //11
    $X_Director   = $_POST["inputDirector"]; //12
    $X_Actor   = $_POST["inputActor"]; //13
    $X_ReleaseS   = $_POST["inputReleaseS"]; //14
    $X_ReleaseE   = $_POST["inputReleaseE"]; //15
    echo $X_Code;
    if(!$conn){
        echo "DB연결 실패!";
    }else{ 
        
    $sql = "INSERT INTO movie_info(M_Code, M_Picture_Code, M_Title, E_M_Title, M_Genre_Code, M_Basics, M_Rel_Date, M_Summary, Dircetor_code, Actor_Code, M_Rel_DateS, M_Rel_DateE) VALUES ('$X_Code', '$_X_File', '$X_Title', '$X_Title_en', '$X_Genre', '$X_Basics', '$X_Release', '$X_Summary', '$X_Director', '$X_Actor', '$X_ReleaseS', '$X_ReleaseE')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
}
?>
<script>
    alert('영화 등록 성공!');
    location.href="./movie_info.php";
</script>