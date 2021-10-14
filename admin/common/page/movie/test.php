<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>imageUpload</title>
  </head> 
  <body>
    <form action="imgUplodP.php" method="post" onsubmit="return sendit()">
      <h2>imageUpload</h2>
      <div class="content">
        <div class="nav">
          <ul>
            <li>파일 업로드 : </li>
          </ul>
        </div>
        <div class="nav_info">
          <input type="file" name="imageUpload" id="imageUpload">
        </div>
        <p><button type='submit' id="reg_btn">저장</button></p>
      </div>
    </form>
  </body>
</html>