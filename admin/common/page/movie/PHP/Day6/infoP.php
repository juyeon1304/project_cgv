<?php
    include "./include/sessioncheck.php";
    include "./include/dbconn.php";

    $mem_idx = $_SESSION['idx'];

    $name   = $_POST["name"];
    $hp     = $_POST["hp"];
    $email  = $_POST["email"];
    // $hobby  = $_POST["hobby"];  // ['영화감상', '쇼핑', '게임']
    $hobby  = $_POST["hobby"];
    // if(isset($_POST["hobby"])){
    //     echo "hobby 값이 넘어옴";
    // }
    $hobbystr = "";
    foreach($hobby as $h){
        $hobbystr .= $h.",";
    }

    $zipcode = $_POST["zipcode"];
    $address1 = $_POST["address1"];
    $address2 = $_POST["address2"];
    $address3 = $_POST["address3"];

    $sql = "update tb_member set mem_name='$name', mem_email='$email', mem_hp='$hp', mem_hobby='$hobbystr', mem_zipcode='$zipcode', mem_address1='$address1', mem_address2='$address2', mem_address3='$address3' where mem_idx='$mem_idx'";

    $result = mysqli_query($conn, $sql);
    echo "<script>alert('수정되었습니다');location.href='info.php';</script>";
    

?>