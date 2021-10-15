<?php
    include "../../admin/user_info/include/sessioncheck.php";
    include "../../admin/user_info/include/dbconn.php";
    // echo $_SESSION['userid'];

 function lastday($this_month){
    $this_date = date("Y-".$this_month."-d");
    $L = new DateTime( $this_date );
    $this_lastDay = $L->format( 't' );
    return  $this_lastDay;
 }
    
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
    <script type="text/javascript" src="./js/ticket.js"></script> 
    
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
                    <div id="theather_content" class="theater_content clear">
                        <div id="theater_area" class="theater_area theater_ul">
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
                        <div id="theater_name"  class="theater_ul theater_name">
                            <ul class=" scrl">
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
                                <li>강남</li>
                                <li>강변</li>
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
                            <ul class="scrl">
                            <?php
                                  $this_day = date('d');
                                //   $this_day = 24;
                                  $this_month = date('m');
                                  $this_year = date("Y");
                                  $total_day = $this_day;
                                  $last_day = lastday($this_month);
                                  $i = 1;
                                  $day_arr = array("일","월","화","수","목","금","토");
                                  $m_last_day = 19;
                                  while($i < 16){
                                    
                                    $today = date('Y').'-'.date('m').'-'.$total_day;

                                    if($i == 1 || $total_day == 1 ){
                                        

                            ?>
                                <input type="hidden" id="m_last_day" value="<?=$m_last_day?>">
                                <li class="month_li">
                                    <?php
                                        if($i == 1){
                                    ?>
                                    <span class="year"><?=$this_year?></span>
                                    <?php
                                        }
                                    ?>
                                    <span class="month"><?=$this_month?></span>
                                </li> 
                                
                            <?php
                                    }
                                $day_no = date('w', strtotime($today));
                                $day_text = $day_arr[$day_no];
                                
                            ?>
                                <li class="date_li">
                                    <span class="dayWeek" value="<?=$day_text?>"><?=$day_text?></span>
                                    <span class="day"><?=$total_day?></span>
                                </li> 


                            <?php
                                    $total_day++;
                                    if($last_day < $total_day){
                                        $total_day = 1;
                                        if($this_month == 12){
                                            $this_year = $this_year+1;
                                            $this_month = 1;
                                        }else{
                                            $this_month = $this_month+1;
                                            
                                        }
                                       
                                    }
                                    
                                     $i++;
                                     
                                    //  echo $today;
                                    // echo($day_arr[date('w', strtotime($today))]);
                                    }

                                
                            ?>
                            
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