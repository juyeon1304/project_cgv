<?php
    include "./include/dbconn.php";
    
    $inputName = $_POST["inputName"]; 
    $inputTel = $_POST["inputTel"]; 
   

    if(!$conn){
        echo "DB연결 실패!";
    }else{ 

    $sql = "INSERT INTO movie_info(M_Code, M_Title, E_M_Title, M_Genre_Code, M_Basics, M_Rel_Date, M_Summary, Dircetor_code, Actor_Code, M_Rel_DateS, M_Rel_DateE) VALUES ('$X_Code', '$X_Title', '$X_Title_en', '$X_Genre', '$X_Basics', '$X_Release', '$X_Summary', '$X_Director', '$X_Actor', '$X_ReleaseS', '$X_ReleaseE')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
}
?>
<script>
    alert('영화관 등록 성공!');
    location.href="/admin/theater_info/theater-chk.php";
</script>