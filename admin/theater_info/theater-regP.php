<?php
    include "./include/dbconn.php";
    
    $inputName = $_POST["inputName"]; 
    $inputTel = $_POST["inputTel"]; 
    $zipcode = $_POST['zipcode'];
    $inputAddr1 = $_POST['inputAddr1'];
    $inputAddr2 = $_POST['inputAddr2'];
    $inputAddr3 = $_POST['inputAddr3'];
    // global $inputCity;
    // $inputCity = $_POST['inputCity'];


    
    
    // echo "<script>alert(typeof('$inputCity'))</script>";

    if(!$conn){
        echo "DB연결 실패!";
    }else{ 

    if(!empty($_POST['inputCity'])){
        foreach($_POST['inputCity'] as $cityCode){
            $inputCity .= $cityCode;
        }
    }

    $sql = "INSERT INTO theater_info( theater_name, theater_zipcode, theater_addr1, theater_addr2, theater_addr3, theater_tel, theater_cityCode) VALUES ('$inputName', '$zipcode', '$inputAddr1', '$inputAddr2', '$inputAddr3','$inputTel', '$inputCity')";

    $result = mysqli_query($conn, $sql);
}
?>
<script>
    alert('영화관 등록 성공!');
    location.href="/admin/theater_info/theater-chk.php";
</script>