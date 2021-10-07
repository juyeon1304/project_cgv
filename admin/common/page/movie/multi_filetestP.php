<?php


// if($_FILES['x_file']['name'][0]){
  
//     echo $_FILES['x_file']['name'][0];
//     echo $_FILES['x_file']['tmp_name'][0];

// }
$uploads_dir = "./board/upload";
foreach($_FILES['x_file']['name'] as $f => $name){
    echo $_FILES['x_file']['name'][$f];
    $error = $_FILES['x_file']['error'][$f];
    $name = $_FILES['x_file']['name'][$f];
    $ext = explode('.',$name);
    $rename = $ext[0].time();
    $rename = $rename.".".$ext[1];
    $ext = strtolower(array_pop($ext));
    $filepath = $uploads_dir."/".$rename;
    move_uploaded_file($_FILES['x_file']['tmp_name'][$f],$filepath);
}

?>


<!-- 
if($_FILES['b_file']['tmp_name']){
    $uploads_dir = "./upload";
    $allowd_ext = array('jpg','jpeg','png','gif','bmp');
    $error = $_FILES['b_file']['error'];
    $name = $_FILES['b_file']['name'];
    $ext = explode('.',$name);
    $rename = $ext[0].time();
    $rename = $rename.".".$ext[1];
    $ext = strtolower(array_pop($ext));

    if(!in_array($ext,$allowd_ext)){
        echo "허용되지 않은 확장명입니다.";
        exit;
    }

    $filepath = $uploads_dir."/".$rename;

    move_uploaded_file($_FILES['b_file']['tmp_name'],$filepath);

} -->
