<?php
  include '../admin/user_info/include/sessionadmin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/admin/common/css/default.css">
    <link rel="stylesheet" href="/admin/common/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <title>관리자 페이지</title>
</head>

<body>
    <div class="wrap_body">
        <div class="left">
            <header>
                <div class="top wrap_comm">
                    <div class="flex">
                        <h1 class="left"><a href="../contents/util/index.php" class="wrap_img"><img
                                    src="/admin/common/images/logo_cvg.png" alt=""><span
                                    class="hide">CGV관리자페이지</span></a></h1>
                        <div class="right">
                            <ul class="util flex">
                                <li>
                                    <div class="profile wrap_img">
                                        <img src="/admin/common/images/img_account.svg" alt="">
                                    </div>
                                </li>
                                <li><a href="./user_info/user_reg.php" target="content">계정생성</a></li>
                                <li><a href="./user_info/user_info.php" target="content">계정찾기</a></li>
                                <li><a href="../contents/util/logout.php">로그아웃</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="wrap_gnb">
                    <nav>
                        <ul>
                            <li>
                                <a href="">공지관리</a>
                                <ul>
                                    <li><a href="">공지사항 수정</a></li>
                                    <li><a href="">공지사항 등록</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="../admin/common/page/movie/PHP/test/part1.php" target="content">상영관리</a>
                                <ul>
                                    <li><a href="../admin/common/page/movie/movie.php" target="content">영화 등록</a></li>
                                    <li><a href="../admin/common/page/movie/movie_info.php" target="content">영화 조회</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="">극장 관리</a>
                                <ul>
                                    <li><a href="/admin/theater_info/theater-reg.php" target="content">영화관 등록</a></li>
                                    <li><a href="/admin/theater_info/theater-chk.php" target="content">영화관 조회</a></li>
                                    <li><a href="/admin/theater_info/room-sch.php" target="content">스케줄 관리</a></li>
                                    <li><a href="/admin/theater_info/room-sch2.php" target="content">스케줄 관리2</a></li>
                                    <li><a href="/admin/theater_info/sch_info.php" target="content">스케줄 조회</a></li>
                                    <li><a href="/admin/theater_info/sch_info2.php" target="content">스케줄 조회2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="">고객관리</a>
                                <ul>
                                    <li><a href="./user_info/user_info.php" target="content">회원 목록</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>
        <div class="right">
            <main class="">
                <div id="wrap_comm" style="overflow:scroll; height:80%">
                    <iframe width="100%" height="1083px" frameborder=0 name="content"></iframe>
                </div>
            </main>
        </div>
    </div>
</body>

</html>