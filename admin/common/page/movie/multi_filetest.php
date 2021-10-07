<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>여러 파일 업로드 연습</title>
</head>
<body>
    <form action="multi_filetestP.php" method="post" enctype="multipart/form-data">
    <input type="file" name="x_file[]">
    <input type="file" name="x_file[]">
    <p><input type="submit" value="파일업로드"></p>

</form>
    
</body>
</html>