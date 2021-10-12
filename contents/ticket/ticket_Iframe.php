<?php
    include "../../admin/user_info/include/sessioncheck.php";
    include "../../admin/user_info/include/dbconn.php";
    // echo $_SESSION['userid'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/common/css/default.css">
    <link rel="stylesheet" href="/common/css/style.css">
    <link rel="stylesheet" href="./css/ticket_iframe.css">
    <script type="text/javascript" src="../../admin/user_info/js/user_reg.js"></script> 
    <script></script>
</head>
<body>
    <div id="main_container">
        <div id="btn_line">
            <div id="btn_Eng" class="btn_style">
                <span>English</span>
            </div>
            <div id="btn_book" class="btn_style">
                <span>예매가이드</span>
            </div>
            <div id="btn_discount" class="btn_style">
                <span>제휴 할인</span>
            </div>
            <div id="btn_schedule" class="btn_style">
                <span>상영시간표</span>
            </div>
            <div id="btn_ReBook" class="btn_style">
                <span>예매다시하기</span>
            </div>
        </div>
        <div class="side_banner"></div>
        <div class="wrap_step clear">
            <div class="step">
                <div id="sec_movie">
                    <div id="mov_head" class="sec_head">
                        영화
                    </div>
                    <div id="mov_body" class="sec_body">
                        <div id="mov_title">
                            <span class="side_bar"></span>
                            <p class="btn1 btn">전체</p>
                            <span class="side_bar"></span>
                            <p class="btn2 btn">아트하우스
                            <span class="arrow"></span></p>
                            <p class="btn3 btn">특별관
                                <span class="arrow"></span>
                            </p>
                        </div>
                        <div class="sort_title clear">
                            <p class="move_rank move_sort">예매율순</p>
                            <p class="move_name move_sort">가나다순</p>
                        </div>
                    </div>
                </div>
                <div id="mov_list" class="scrl">
                    <ul class="">
                    <?php
                        $sql = "select * From movie_info";
                        $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){
                          $m_title = $row['M_Title'];
                        
                    ?>
                        <li class="clear">
                        <span class="icon_age" id="icon_list1"></span>
                        <span class="text_mov" id="text_list1"><?=$m_title?></span>
                        </li>
                    <?php
                        };
                    ?>
                        
                    </ul>
                </div>
            
            </div>
            <div class="step">
                <div id="sec_theater">
                    <div id="theater_head" class="sec_head">
                        극장
                    </div>
                    <div id="theather_body" class="sec_body clear">
                        <div id="mov_title">
                            <span class="side_bar"></span>
                            <p class="btn1 btn">전체</p>
                            <span class="side_bar"></span>
                            <p class="btn2 btn">아트하우스
                            <span class="arrow"></span></p>
                            <p class="btn3 btn">특별관
                                <span class="arrow"></span>
                            </p>
                        </div>
                        
                    </div>   
                    <div id="theather_content" class="clear">
                        <div id="theater_area" class="theater_ul">
                            <ul>
                                <li id="theater_select">서울</li>
                                <li>경기</li>
                                <li>인천</li>
                                <li>강원</li>
                                <li>대전/충청</li>
                                <li>대구</li>
                                <li>부산/울산</li>
                                <li>경상</li>
                                <li>광주/전라/제주</li>
                            </ul>
                        </div>
                        <div id="theater_name"  class="theater_ul">
                            <ul>
                                <li>강남</li>
                                <li>강변</li>
                            
                            </ul>
                        </div>
                        
                    </div>               
                </div>

            </div>
            <div class="step_date">
                <div id="sec_date">
                    <div id="date_head">
                        날짜
                    </div>
                    <div id="date_content">
                        <div id="date_month">
                            <ul>
                                <li class="month_li">
                                    <span class="year">2021</span>
                                    <span class="month">8</span>
                                </li> 
                                <li class="date_li">
                                    <span class="dayWeek">화</span>
                                    <span class="day">3</span>
                                </li> 
                                <li class="date_li">
                                    <span class="dayWeek">수</span>
                                    <span class="day">4</span>
                                </li> 
                                <li class="date_li">
                                    <span class="dayWeek">목</span>
                                    <span class="day">5</span>
                                </li> 
                                <li class="date_li">
                                    <span class="dayWeek">금</span>
                                    <span class="day">6</span>
                                </li> 
                                <li class="date_li">
                                    <span class="dayWeek">토</span>
                                    <span class="day">7</span>
                                </li> 
                            
                            </ul>
                        </div>
                        
                        
                    </div>               
                </div>

            </div>
            <div class="step_time">
                <div class="time_head">
                    시간
                </div>
                <div class="time_body">
                    <div id="time_icon">
                        <span class="morning">조조</span>
                        <span class="night">심야</span>
                    </div>
                    <div class="time_seat">
                        <div class="time_theater">
                            <span class="move_type">2D</span>
                            <span class="theater_room">시네엔포레</span>
                            <span class="seat_count">(총34석)</span>

                        </div>
                    </div>
                    <div class="time_List">
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        

                    </div>
            
                    <div class="time_seat">
                        <div class="time_theater">
                            <span class="move_type">2D</span>
                            <span class="theater_room">3관</span>
                            <span class="seat_count">(총218석)</span>

                        </div>
                    </div>
                    <div class="time_List">
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        <div class="time_seatList">
                            <span class="time_point">11:15</span> 
                            <span class="seat_countG">34석</span> 
                        </div>
                        

                    </div>
                </div>
                
            </div>
        </div>
        <div class="side_banner1"></div>
        <div class="select_line"></div>
        <div class="movie_bottom"></div>
                        



        
    <!-- 메인컨테이너 끝 -->
    </div>
  




</body>
</html>