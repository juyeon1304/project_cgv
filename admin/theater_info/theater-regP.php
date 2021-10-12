<?php
    include "./include/dbconn.php";
    
    $inputName = $_POST["inputName"]; 
    $inputTel = $_POST["inputTel"]; 
    $zipcode = $_POST['zipcode'];
    $inputAddr1 = $_POST['inputAddr1'];
    $inputAddr2 = $_POST['inputAddr2'];
    $inputAddr3 = $_POST['inputAddr3'];
   

    if(!$conn){
        echo "DB연결 실패!";
    }else{ 

    $sql = "INSERT INTO theater_info( theater_name, theater_zipcode, theater_addr1, theater_addr2, theater_addr3, theater_tel) VALUES ('$inputName', '$zipcode', '$inputAddr1', '$inputAddr2', '$inputAddr3', '$inputTel')";

    $result = mysqli_query($conn, $sql);
}
?>
<script>
    alert('영화관 등록 성공!');
    location.href="/admin/theater_info/theater-chk.php";
</script>