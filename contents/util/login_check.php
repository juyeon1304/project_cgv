<?php
 include "../../admin/user_info/include/dbconn.php";
 
    session_start();

    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    $Y_user_id = $_POST['x_userid'];
    $Y_user_pw = $_POST['x_userpw'];
    $sql = "select * from user_info where info_userid = '$Y_user_id' and info_password = '$Y_user_pw'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    
    if(isset($row)){
        $userid = $row['info_userid'];
        $useridx = $row['info_seq'];
        $type = $row['info_type'];

        $_SESSION['userid'] = $userid;
        $_SESSION['useridx'] = $useridx;
        $_SESSION['user_type'] = $type;
        $c_ip = get_client_ip();
        $sql = "insert into user_login_his(log_userid,log_ip,log_com,log_date) values ('$userid','$c_ip','',now())";
        $result = mysqli_query($conn, $sql);


        echo "<script>location.href='./index.php'; </script>";
    }else{
        echo "<script>alert('아이디와 비번을 다시 확인해 주세요.');location.href='./login.html'; </script>";
    }
  
?>

