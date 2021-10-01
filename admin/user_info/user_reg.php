<?php
include "./include/dbconn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet"  href="./css/user_reg.css" type="text/css" />
    <script type="text/javascript" src="./js/user_reg.js"></script> 
</head>
<body>
    <form action="user_regP.php" method="post" onsubmit="return sendit()">
    <h2>User Registration</h2>
    <div class="content">
        <div class="nav">
            <ul>
                <li>이름 : </li>
                <li>ID : </li>
                <li class="hidden_off hidden_li"></li>
                <li>Password : </li>
                <li>password confirm : </li>
                <li>Birthday : </li>
                <li>Phone No : </li>
                <li>Email : </li>
                <li>Auth type : </li>
            </ul>
        </div>
        <div class="nav_info">
            <ul>
                <li><input type="text" name="x_user_name" id="user_name"
                onkeyup="nameCheck(this)">
                <input type="hidden" name="nameSet" id="nameSet" value="n">
            </li>
                <li><input type="text" name="x_userid" id="userid">
                <input type="button" onclick="idcheck()" value="아이디체크">
                <input type="hidden" name="idset" id="idset" value="n">
            </li>
                <li class="hidden_off hidden_li">
                    <p id="idchecktext"></p>
                </li>
                <li><input type="password" name="x_userpw" id="userpw"></li>
                <li><input type="password" name="x_c_userpw" id="c_userpw"></li>
                <li><input type="date" name="x_bir_date" id="bir_date"></li>
                <li><input type="text" name="x_p_no" id="p_no"></li>
                <li><input type="email" name="x_email" id="email"></li>
                <li>
                   
                    <select name="x_auth_type" class="select_type" >
                    <?php
                        $sql = "select * From user_auth";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_array($result)){
                            $auth_type = $row['auth_type'];
                    ?>
                            
                    <option value="<?=$auth_type?>" ><?=$auth_type?></option>
                    <?php
                        
                        };
                    ?>
                </select>
                </li>
            </ul>
        </div>
        <p><button type='submit' id="reg_btn">저장</button></p>
    </div>
    </form>
</body>
</html>