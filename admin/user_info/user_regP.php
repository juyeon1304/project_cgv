<?php
include "./include/dbconn.php";
$Y_user_name = $_POST['x_user_name'];
$Y_userid = $_POST['x_userid'];
$Y_userpw = $_POST['x_userpw'];
$Y_bir_date = $_POST['x_bir_date'];
$Y_p_no = $_POST['x_p_no'];
$Y_email = $_POST['x_email'];
$Y_auth_type = $_POST['x_auth_type'];

$sql = "insert into user_info(info_userid,info_password,info_name,info_birth,info_phone,info_email,info_type,info_reg_date) values ('$Y_userid','$Y_userpw','$Y_user_name','$Y_bir_date','$Y_p_no','$Y_email','$Y_auth_type',now())";
$result = mysqli_query($conn, $sql);


echo "<script>alert('저장되었습니다.');location.href='./user_info.php';</script>"

?>
