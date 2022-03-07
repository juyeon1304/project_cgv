<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>영화 그 이상의 감동. CGV</title>
  <link rel="stylesheet" href="../../common/css/default.css">
  <link rel="stylesheet" href="../../common/css/swiper.css">
  <link rel="stylesheet" href="../../common/css/style.css">
  <link rel="stylesheet" href="../../common/css/index.css">
  <link rel="stylesheet" href="../../common/css/sub.css">
  <link rel="stylesheet" href="./css/ticket_style.css">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" charset="utf-8"></script>
  <script src="../../common/js/common.js" charset="utf-8"></script>
  <script src="../../common/js/swiper.js" charset="utf-8"></script>
  <script src="../../common/js/slide.js" charset="utf-8"></script>
  <script src="../../common/js/script.js" charset="utf-8" defer></script>
</head>

<body class="body_idx">
 
    <section class="sec_seat">
      <div class="wrap_com">
        <div class="bg_black">
          <h2 class="">인원 / 좌석</h2>
        </div>
        <div class="wrap_info clear">
          <div class="left">
            <h3 class="hide">연령대별 인원 선택</h3>
            <p class="txt_red">* 최대 6명 선택 가능</p>
            <ul class="list_group">
              <li class="" id="g_adult">
                <span class="title">일반</span>
                <ul>
                  <li data-count="0" class="selected" type="adult"><span class="select_no1">0</span></li>
                  <li data-count="1" type="adult"><span class="select_no1">1</span  ></li>
                  <li data-count="2" type="adult"><span class="select_no1">2</span></li>
                  <li data-count="3" type="adult"><span class="select_no1">3</span></li>
                  <li data-count="4" type="adult"><span class="select_no1">4</span></li>
                  <li data-count="5" type="adult"><span class="select_no1">5</span></li>
                  <li data-count="6" type="adult"><span class="select_no1">6</span></li>
                  <li data-count="7" type="adult" class="dimmed"><span>7</span></li>
                  <li data-count="8" type="adult" class="dimmed"><span>8</span></li>
                </ul>
              </li>
              <li class="" id="g_youth">
                <span class="title">청소년</span>
                <ul>
                  <li data-count="0" class="selected" type="youth"><span class="select_no2">0</span></li>
                  <li data-count="1" type="youth"><span class="select_no2">1</span></li>
                  <li data-count="2" type="youth"><span class="select_no2">2</span></li>
                  <li data-count="3" type="youth"><span class="select_no2">3</span></li>
                  <li data-count="4" type="youth"><span class="select_no2">4</span></li>
                  <li data-count="5" type="youth"><span class="select_no2">5</span></li>
                  <li data-count="6" type="youth"><span class="select_no2">6</span></li>
                  <li data-count="7" type="youth" class="dimmed"><span>7</span></li>
                  <li data-count="8" type="youth" class="dimmed"><span>8</span></li>
                </ul>
              </li>
              <li class="" id="g_senior">
                <span class="title">경로</span>
                <ul>
                  <li data-count="0" class="selected" type="senior"><span class="select_no3">0</span></li>
                  <li data-count="1" type="senior"><span class="select_no3">1</span></li>
                  <li data-count="2" type="senior"><span class="select_no3">2</span></li>
                  <li data-count="3" type="senior"><span class="select_no3">3</span></li>
                  <li data-count="4" type="senior"><span class="select_no3">4</span></li>
                  <li data-count="5" type="senior"><span class="select_no3">5</span></li>
                  <li data-count="6" type="senior"><span class="select_no3">6</span></li>
                  <li data-count="7" type="senior" class="dimmed"><span>7</span></li>
                  <li data-count="8" type="senior" class="dimmed"><span>8</span></li>
                </ul>
              </li>
              <li class="" id="g_special">
                <span class="title">우대</span>
                <ul>
                  <li data-count="0" class="selected" type="special"><span class="select_no4">0</span></li>
                  <li data-count="1" type="special"><span class="select_no4">1</span></li>
                  <li data-count="2" type="special"><span class="select_no4">2</span></li>
                  <li data-count="3" type="special"><span class="select_no4">3</span></li>
                  <li data-count="4" type="special"><span class="select_no4">4</span></li>
                  <li data-count="5" type="special"><span class="select_no4">5</span></li>
                  <li data-count="6" type="special"><span class="select_no4">6</span></li>
                  <li data-count="7" type="special" class="dimmed"><span>7</span></li>
                  <li data-count="8" type="special" class="dimmed"><span>8</span></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="right">
            <h3 class="hide">영화관 정보</h3>
            <ul class="list_info flex">
              <li><span class="hide">영화관</span>CGV건대입구</li>
              <li><span class="hide">상영관 </span>2관 3층</li>
              <li><span class="">남은좌석 </span>90/123</li>
            </ul>
            <p class="info_time"><b>2022.02.10</b><b class="exe">(목)</b><b>10:00 ~ 11:59</b></p>
          </div>
        </div>
        <div class="wrap_room">
          <div class="clear">
            <div class="wrap_info right">
              <ul>
                <li class="selected"><i style="background-position:0 0;"></i>선택</li>
                <li class="reserved"><i style="background-color:#bbb; background-image:none"></i>예매완료</li>
                <li class="notavail"><i style="background-position:-25px 0; background-color:#bbb;"></i>선택불가</li>
                <li class="distanced"><i style="background-position:-225px -50px;"></i>거리두기 좌석</li>
              </ul>
              <ul>
                <li class="handicap"><i style="background-position:-75px  0;"></i>장애인석</li>
                <li class="4d"><i style="background-position:-150px 0;"></i>4DX</li>
                <li class="couple"><i style="background-position:-100px 0;"></i>sweetbox</li>
              </ul>
            </div>
            <div class="wrap_seats left">
              <div class="inner">
                <div class="screen">SCREEN</div>
                <div class="seats">
                  <div id="container" class="container clear"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
<script src="./js/seats.js"></script>
</body>

</html>
