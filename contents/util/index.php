<?php

  include '../../admin/user_info/include/sessioncheck.php';
 
?>

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
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" charset="utf-8"></script>
  <script src="../../common/js/common.js" charset="utf-8"></script>
  <script src="../../common/js/swiper.js" charset="utf-8"></script>
  <script src="../../common/js/slide.js" charset="utf-8"></script>
  <script src="../../common/js/script.js" charset="utf-8" defer></script>
  <script>
    const userid = sessionStorage.getItem('userid');
    // console.log(userid);
  </script>
</head>

<body class="body_idx">
  <nav class="nav_skip">
    <ul>
      <li><a href="#gnb">대메뉴 바로가기</a></li>
      <li><a href="#main">본문 바로가기</a></li>
      <li><a href="#nav_quick">빠른메뉴 바로가기</a></li>
    </ul>
  </nav>
  <!-- header 시작 -->
  <header>
    <div class="wrap_com">
      <div class="wrap_gnb">
        <h1 class="logo_cgv.png">
          <a href="">
            <img src="/common/images/logo_cgv.png" alt="CGV">
          </a>
        </h1>
        <h2 class="hide">대메뉴</h2>
        <nav>
          <ul class="clear">
            <li class="movie">
              <a href=""><span class="hide">영화</span></a>
              <div class="wrap_snb">
                <div>
                  <ul>
                    <li><a href="">무비차트</a></li>
                    <li><a href="">HD 트레일러</a></li>
                    <li><a href="">무비파인더</a></li>
                    <li><a href="">CGV아트하우스</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="booking">
              <a href=""><span class="hide">예매</span></a>
              <div class="wrap_snb">
                <div>
                  <ul>
                    <li><a href="../ticket/ticket.php">빠른예매</a></li>
                    <li><a href="">상영시간표</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="theaters">
              <a href=""><span class="hide">극장</span></a>
              <div class="wrap_snb">
                <div>
                  <ul>
                    <li><a href="">CGV 극장</a></li>
                    <li><a href="">특별관</a></li>
                    <li><a href="">CLUB 서비스</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <li class="event">
              <a href=""><span class="hide">이벤트&amp;컬처</span></a>
              <div class="wrap_snb">
                <div>
                  <ul>
                    <li><a href="">이벤트</a></li>
                    <li><a href="">기프트샵</a></li>
                    <li><a href="">매거진</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div>
          <div class="ad">
            <a href="">
              <img src="/common/images/banner_card.png" alt="현대오일뱅크 보너스 카드 혜택!">
            </a>
          </div>
          <div class="search">
            <input type="search">
            <button>검색</button>
          </div>
        </div>
      </div>
      <div class="wrap_util">
        <h2 class="hide">유틸리티 메뉴</h2>
        <ul class="list_util right clear">
            <?php
               if($_SESSION['user_type'] == 'A1'){
            ?>
          <li class="mg_site"><a href="../../admin/index.php"><span>Mgv</span></a></li>
          <?php
                };
          ?>
          <li class="logout"><a href="./logout.php"><span class="hide">Log out</span></a></li>
          <!-- <li class="join"><a href="#"><span class="hide">회원가입</span></a></li> -->
          <li class="my"><a href="#"><span class="hide">MY CGV</span></a></li>
          <li class="vip"><a href="#"><span class="hide">VIP LOUNGE</span></a></li>
          <li class="club"><a href="#"><span class="hide">Club서비스</span></a></li>
          <li class="cs"><a href="#"><span class="hide">고객센터</span></a></li>
          <li class="en"><a href="#"><span class="hide">ENGLISH TICKETING</span></a></li>
        </ul>
        <div class="left">
          <h2 class="hide">CGV 소셜 네트워크</h2>
          <ul class="list_sns clear">
            <li class="app"><a href=""><span class="hide">CGV앱 설치</span></a></li>
            <li class="facebook"><a href=""><span class="hide">Facebook 좋아요!</span></a></li>
            <li class="insta"><a href=""><span class="hide">Instagram Follow</span></a></li>
          </ul>
          <a href="/contents/util/dc/" class="frugal"><span class="hide">알뜰한 영화관람법</span></a>
        </div>
      </div>
    </div>
    </div>
  </header>
  <main id="main">
    <section class="sec_visual">
      <div class="wrap_com">
        <div class="slide swiper-container">
          <div class="nav_controls">
            <button class="btn_play"><span class="hide">슬라이드 자동 넘기기 시작</span></button>
            <button class="btn_next"><span class="hide">다음슬라이드</span></button>
            <button class="btn_prev"><span class="hide">이전슬라이드</span></button>
          </div>
          <ul class="swiper-wrapper">
            <li class="swiper-slide">
              <a href="">
                <img src="/common/images/img_visual1.jpg" alt="">
                <p class="txt_visual">
                  <strong>000님!</strong><br>
                  혹시 지금 선물 고민중?<br>
                  누구나 기뻐할 선물이 여기 있어요!
                </p>
              </a>
            </li>
            <li class="swiper-slide">
              <a href="">
                <img src="/common/images/img_visual2.jpg" alt="">
              </a>
            </li>
            <li class="swiper-slide">
              <a href="">
                <img src="/common/images/img_visual3.jpg" alt="">
              </a>
            </li>
            <li class="swiper-slide">
              <a href="">
                <img src="/common/images/img_visual4.jpg" alt="">
              </a>
            </li>
            <li class="swiper-slide">
              <a href="">
                <img src="/common/images/img_visual5.jpg" alt="">
              </a>
            </li>
          </ul>
          <div class="paging"></div>
        </div>
      </div>
    </section>
    <div class="wrap_com">
      <section class="sec_movie">
        <h2 class="h_type1 bg_line">
          <span class="hide">movie selection</span>
          <img src="/common/images/txt_movie_selection.gif" alt="">
        </h2>
        <div class="clear">
          <div class="left">
            <iframe src="https://ad.cgv.co.kr/NetInsight/html/CGV/CGV_201401/main@Selection_L" width="733" height="388" title="" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" name="Movie_Selection_L" id="Movie_Selection_L"
              allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>
          </div>
          <div class="right">
            <a href="">
              <img src="/common/images/img_poster1.jpg" alt="광고 - 이스케이프룸2 노 웨이 아웃 7월 대개봉">
            </a>
          </div>
        </div>
      </section>
      <section class="sec_event">
        <h2 class="h_type1 bg_line">
          <span class="hide">event</span>
          <img src="/common/images/txt_event.gif" alt="">
        </h2>
        <nav class="tab_type1">
          <ul class="clear">
            <li><a href="">CGV스페셜</a></li>
            <li><a href="">영화/예매</a></li>
            <li><a href="">CGV아트하우스</a></li>
            <li><a href="">제휴/할인</a></li>
            <li><a href="">멤버십</a></li>
          </ul>
        </nav>
        <div class="">
          <ul class="list_type1 clear">
            <li>
              <a href="">
                <img src="/common/images/img_event1.jpg" alt="">
              </a>
            </li>
            <li>
              <a href="">
                <img src="/common/images/img_event2.jpg" alt="">
              </a>
            </li>
            <li>
              <a href="">
                <img src="/common/images/img_event3.jpg" alt="">
              </a>
            </li>
          </ul>
        </div>
        <div class="bx_type1">
          <div class="bx_outer">
            <div class="bx_inner">
              <a href="">
                <img src="/common/images/img_ad1.jpg" alt="NH채움카드 프로모션">
              </a>
            </div>
          </div>
          <div class="bx_outer">
            <div class="bx_inner">
              <a href="">
                <img src="/common/images/img_ad2.jpg" alt="NH채움카드 프로모션">
              </a>
            </div>
          </div>
          <div class="bx_outer">
            <div class="bx_inner">
              <a href="">
                <img src="/common/images/img_ad3.png" alt="NH채움카드 프로모션">
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="sec_news">
        <div>
          <h2>공지사항</h2>
          <ul class="list_news">
            <li>
              <a href="">
                <p class="title"><span class="category">[기타]</span>포토플레이 서비스 개선 안내 </p>
                <span class="date">2021.12.04</span>
              </a>
            </li>
            <li>
              <a href="">
                <p class="title"><span class="category">[기타]</span>포토플레이 서비스 개선 안내</p>
                <span class="date">2021.12.04</span>
              </a>
            </li>
          </ul>
        </div>
      </section>
    </div>
    <div class="banner_hori">
      <a href="">
        <div class="wrap_com">
          <img src="/common/images/banner_hori.png" alt="">
        </div>
      </a>
    </div>
  </main>
  <footer>
    <section class="sec_special">
      <div class="wrap_com">
        <h2 class="hide">특별관 리스트</h2>
        <ul class="">
          <li class="dx"><a href=""><span class="hide">4DX</span></a></li>
          <li class="imax"><a href=""><span class="hide">IMAX</span></a></li>
          <li class="screenx"><a href=""><span class="hide">SCREENX</span></a></li>
          <li class="spherex"><a href=""><span class="hide">SphereX</span></a></li>
          <li class="gold"><a href=""><span class="hide">GOLDCLASS</span></a></li>
          <li class="cine"><a href=""><span class="hide">CINE de CHEF</span></a></li>
          <li class="cinema"><a href=""><span class="hide">THE PRIVATE CINEMA</span></a></li>
          <li class="kids"><a href=""><span class="hide">Cine kids</span></a></li>
          <li class="cinenforet"><a href=""><span class="hide">CINE&amp;FORET</span></a></li>
        </ul>
      </div>
    </section>
    <section class="sec_info wrap_com">
      <h2 class="hide">CJ CGV 회사소개 및 정책</h2>
      <ul class="list1 clear">
        <li><a href="" target="_blank">회사소개</a></li>
        <li><a href="" target="_blank">IR</a></li>
        <li><a href="" target="_blank">채용정보</a></li>
        <li><a href="" target="_blank">광고/프로모션문의</a></li>
        <li><a href="" target="_blank">제휴문의</a></li>
        <li><a href="" target="_blank">출점문의</a></li>
        <li><a href="">이용약관</a></li>
        <li><a href="">편성기준</a></li>
        <li><a href="" class="color_org">개인정보처리방침</a></li>
        <li><a href="">법적고지</a></li>
        <li><a href="">이메일주소무단수집거부</a></li>
        <li><a href="" target="_blank">윤리경영</a></li>
        <li><a href="" class="color_org">사이버감사실</a></li>
        <li><a href="">사이트맵</a></li>
      </ul>
      <div class="btm">
        <ul class="list2 clear">
          <li class="">(04377)서울특별시 용산구 한강대로 23길 55, 아이파크몰 6층(한강로동)</li>
          <li class="clear"><span>대표이사 : </span>허민회</li>
          <li><span>사업자등록번호 : </span>104-81-45690</li>
          <li><span>통신판매업신고번호 : </span>2017-서울용산-0662<a href="#" class="link_ftc">사업자정보확인</a></li>
          <li class="clear"><span>호스팅사업자 : </span>CJ올리브네트웍스</li>
          <li><span>개인정보보호 책임자 : </span>심준범</li>
          <li><span>대표이메일 : </span>cjcgvmaster@cj.net</li>
          <li><span>CGV고객센터 : </span>1544-1122</li>
          <li class="copy">&copy;CJ CGV. All Rights Reserved</li>
        </ul>
        <div class="bx_float clear">
          <ul class="list_share clear">
            <li>
              <a href="https://www.facebook.com/CJCGV" target="_blank" class="facebook" style="background-position:-509px -429px"><span class="hide">페이스북</span></a>
            </li>
            <li>
              <a href="https://twitter.com/cj_cgv" target="_blank" class="twitter" style="background-position:-551px -429px"><span class="hide">트위터</span></a>
            </li>
            <li>
              <a href="https://www.instagram.com/cgv_korea/" target="_blank" class="instagram" style="background-position:-593px -429px"><span class="hide">인스타그램</span></a>
            </li>
          </ul>
          <div class="sel_family">
            <select class="" name="">
              <option>계열사 바로가기</option>
              <optgroup label="CJ그룹">
                <option value="http://www.cj.net/">CJ주식회사</option>
              </optgroup>
              <optgroup label="식품 &amp; 식품서비스">
                <option value="https://www.cj.co.kr/kr/index">CJ제일제당</option>
                <option value="https://www.cjfoodville.co.kr/main.asp">CJ푸드빌</option>
                <option value="http://www.cjfreshway.com/index.jsp">CJ프레시웨이</option>
              </optgroup>
              <optgroup label="생명공학">
                <option value="https://www.cj.co.kr/kr/about/business/bio">CJ제일제당 BIO사업부문</option>
                <option value="https://www.cj.co.kr/kr/about/business/bio">CJ Feed&amp;Card</option>
              </optgroup>
              <optgroup label="물류 &amp; 신유통">
                <option value="https://www.cjlogistics.com/ko/main">CJ대한통운</option>
                <option value="http://www.cjenc.co.kr/kr/Default.asp">CJ대한통운 건설부문</option>
                <option value="https://www.oliveyoung.co.kr/store/company/brandStory.do">CJ올리브영</option>
                <option value="https://www.cjolivenetworks.co.kr:449/">CJ올리브네트웍스</option>
                <option value="https://www.cjoshopping.com:9002/index.asp">CJ ENM 커머스부문</option>
              </optgroup>
              <optgroup label="엔터테인먼트 &amp; 미디어">
                <option value="https://www.cjem.net:433/main/?locale=ko">CJ ENM 엔터테인먼트부문</option>
                <option value="http://corp.cgv.co.kr/company/ir/manage/manage_list.aspx ">CJ CGV</option>
                <option value="http://www.cjpowercast.com/">CJ파워캐스트</option>
              </optgroup>
            </select>
            <button>GO</button>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <div class="nav_quick" id="nav_quick">
    <h2 class="hide">빠른 메뉴</h2>
    <ul>
      <li class="theater">
        <a href="">
          <img src="/common/images/btn_theater.gif" alt="CGV극장">
        </a>
      </li>
      <li class="artHouse">
        <a href="">
          <img src="/common/images/btn_artHouse.gif" alt="CGV아트하우스">
        </a>
      </li>
      <li class="special">
        <a href="">
          <img src="/common/images/btn_special.gif" alt="CGV특별관">
        </a>
      </li>
      <li class="myTicket">
        <a href="">
          <img src="/common/images/btn_myTicket.gif" alt="CGV예매내역">
        </a>
      </li>
      <li class="dcInfo">
        <a href="">
          <img src="/common/images/btn_dcInfo.gif" alt="CGV할인정보">
        </a>
      </li>
    </ul>
    <button class="btn_top" id="btn_top" onclick="scrollToTop()">
      <span class="hide">
        최상단으로 이동
      </span>
    </button>
  </div>
</body>

</html>
