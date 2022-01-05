'use strict';

window.onload = function(){
   


    //================ 영화 선택 =======================
    const text_mov = document.getElementsByClassName('text_mov');
    const mov_code = document.getElementsByClassName('mov_code');
    const li_mov = document.getElementsByClassName('li_mov');
    const th_date = document.getElementById('th_date');
    const th_name = document.getElementById('th_name');
    const send_movie_code = document.getElementById('send_movie_code');
    
    
    let move_a_code = '';
    for(let i = 0; i < text_mov.length; i++){
        text_mov[i].addEventListener('click',(e)=>{
            mov_img(mov_code[i].value);
            send_movie_code.value = mov_code[i].value;
            move_a_code = mov_code[i].value;
            th_date.innerText = '';
            th_name.innerText = '';
            for(let i = 0; i < text_mov.length; i++){
                li_mov[i].style = 'background-color : none;';
                text_mov[i].style = ' color : black;'
            }
            li_mov[i].style = 'background-color : #333333;';
             text_mov[i].style = ' color : white;'
            //  console.log(s_date[i].value);
             // 영화 변경시 상영관 선택 리셋.
            for(let i = 0; i < area_li.length; i++){
                area_li[i].style = 'background-color : none;color : black;';
            }
            // 영화관 변경시 날짜 선택 리셋
            const move_day_week = document.getElementsByClassName('dayWeek');
            const move_day = document.getElementsByClassName('day');
            for(let i = 0; i < move_day_week.length; i++){
                move_day_week[i].style = 'background-color : none';
                move_day[i].style = 'background-color : none';
                if(move_day_week[i].textContent == '일'){
                    move_day_week[i].style = "color : red";
                    move_day[i].style = "color : red";
                }else if(move_day_week[i].textContent == '토'){
                    move_day_week[i].style = "color : blue";
                    move_day[i].style = "color : blue";
                }else{
                    move_day_week[i].style = "color : black";
                    move_day[i].style = "color : black";
                } 
            }
            send_movie_theater.value = '';
            send_movie_date.value = '';

             

        });
    };
    const mov_img = function(mov_code){
        const xhr = new XMLHttpRequest();
       
        xhr.onreadystatechange = function(){
            
            if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
                const rep_text = xhr.responseText;
                
                const mov_title = rep_text.substring(rep_text.indexOf(',',0)+1);
                
                const img_code = rep_text.substring(0,rep_text.indexOf(',',0));

                // console.log(rep_text);
                // console.log(mov_title);
                // console.log(img_code);
                if(img_code != ''){
                    
                    
                    document.getElementById('select_img').innerHTML = '<img src="../../admin/common/page/movie/file/'+img_code+'" alter="img" width="100px" height="140px">';
                }else{
                    document.getElementById('select_img').innerHTML = '<img src="../../admin/common/page/movie/file/noimg.jpg" alter="img" width="100px" height="140px">';
                }
                document.getElementById('select_title').innerHTML ='<span style="font-size:12px;">'+mov_title+'</span>'
            }
        }
      
        xhr.open("GET","./ajax/move_img.php?mov_code="+mov_code,true);

        xhr.send();
    }
    

    // ======================= 영화관 선택 ==================
    const th_li = document.getElementsByClassName('th_li');
    const total_area = document.getElementsByClassName('th_hid1');
    const city_code = document.getElementsByClassName('th_hid2');
    const send_movie_theater = document.getElementById('send_movie_theater');
    
    th_li[0].id = 'theater_select';
    for(let i=0; i< th_li.length; i++){
            
        th_li[i].addEventListener('click',(e)=>{
         
            for(i=0; i< th_li.length; i++){
                th_li[i].id = '';
            }
            
            e.target.id = 'theater_select' ;   
            
            for(let i=0; i < th_li.length; i++){
                if(th_li[i].id == 'theater_select'){
                   const cl_no = i;
                //    console.log(city_code[cl_no].value);
                //    console.log(total_area[cl_no].value);
                    const area_no = total_area[cl_no].value;
                    console.log(area_no)
                const xhr = new XMLHttpRequest();
       
                xhr.onreadystatechange = function(){

                if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
                const rep_text = xhr.responseText;
                const parent = document.getElementById('area_ul');
                // 선택시 무조건 parent 자식 노드 삭제, 노드 겹치기 방지
                while ( parent.hasChildNodes() ) {
                    parent.removeChild( parent.firstChild ); 
                    }


                      if(rep_text == 'emty'){

                      }else{
                          const area_arr = rep_text.split(',');
                        //   console.log(area_arr[1]);
                       
                        for(let i = 0; i < area_no; i++){
                          let theater_N_code = area_arr[i].split('&')
                          const  li = document.createElement('li');
                          
                            li.innerText = theater_N_code[0];
                           
                            parent.appendChild(li);
                           
                           
                            
                        }
                        // 추가된 노드에 className 삽입
                        const add_li = parent.childNodes;
                        // console.log(add_li.length);
                        for(let i = 0; i < add_li.length; i++){
                            add_li[i].className = 'area_li';
                           
                        }
                        for(let i = 0; i < area_no; i++){
                          let theater_N_code = area_arr[i].split('&')
                          
                          const  teater_input = document.createElement('input');
                          teater_input.type = 'hidden';
                            teater_input.value = theater_N_code[1];
                           
                            parent.appendChild(teater_input);
                           
                            
                        }
                        // 추가된 노드에 className 삽입
                        const add_input = parent.childNodes;
                        // console.log(add_li.length);
                        for(let i = 0; i < add_input.length; i++){
                            if(add_input[i].className != 'area_li'){
                                add_input[i].className = 'area_li_code';
                            }
                            
                           
                        }

                         // ======================== 상영관 선택 ==============================
                        const area_li = document.getElementsByClassName('area_li');
                        const area_li_code = document.getElementsByClassName('area_li_code');
                        const send_movie_theater = document.getElementById('send_movie_theater'); 

                        
                        let theater_a_code = '';
                        for(let i=0; i < area_li.length; i++){
                            area_li[i].addEventListener('click',(e)=>{
                                for(let x = 0; x<area_li.length ; x++){
                                    area_li[x].style = 'background-color : none;color : black;';
                                    send_movie_theater.value = area_li_code[i].value;
                                    theater_a_code = area_li_code[i].value;
                                }
                                e.target.style = 'background-color : #333333;color : white;';
                                
                                th_name.innerText = e.target.textContent;

                                const xhr1 = new XMLHttpRequest();
       
                                xhr1.onreadystatechange = function(){
                                   
                                    if(xhr1.readyState == XMLHttpRequest.DONE && xhr1.status == 200){
                                       
                                       
                                        const rep_date = xhr1.responseText;
                                     
                                            const s_e_date = rep_date.split(',');
                                             const s_date = s_e_date[0] ;
                                             const e_date = s_e_date[1];
                                            //  console.log(`시작일 : ${s_date}, 종료일 : ${e_date}`);
                                             movie_Date(s_date,e_date);
      
                                    }
                                }
                                // console.log(`movei code : ${move_a_code} and theater_code = ${theater_a_code}`)
                                xhr1.open("GET","./ajax/movie_date.php?mov_code="+move_a_code+"&theater_code="+theater_a_code,true);

                                xhr1.send();
                                // 상영관 변경시 날짜 리셋
                                const send_movie_date = document.getElementById('send_movie_date');
                                th_date.innerText = '';
                                send_movie_date.value = '';          
                               
                            });
                            
                        }
                        
                      }
                    }
                }

                xhr.open("GET","./Ajax/theater_info.php?city_code="+city_code[cl_no].value,true);

                xhr.send();



                }
            }
            
        });   

    }

     // ======================== 상영관 선택 ==============================
     const area_li = document.getElementsByClassName('area_li');
     const area_li_code = document.getElementsByClassName('area_li_code');
     let theater_a_code = '';
     for(let i=0; i < area_li.length; i++){
         
        
         area_li[i].addEventListener('click',(e)=>{

            for(let x = 0; x<area_li.length ; x++){
                area_li[x].style = 'background-color : none;color : black;';
               
            }
             e.target.style = 'background-color : #333333;color : white;';
             const th_name = document.getElementById('th_name');
             send_movie_theater.value = area_li_code[i].value
             th_name.innerText = e.target.textContent;
             theater_a_code = area_li_code[i].value;
            const xhr1 = new XMLHttpRequest();

                xhr1.onreadystatechange = function(){

                if(xhr1.readyState == XMLHttpRequest.DONE && xhr1.status == 200){


                    const rep_date = xhr1.responseText;

                    const s_e_date = rep_date.split(',');
                    const s_date = s_e_date[0];
                    const e_date = s_e_date[1];
                    // console.log(`시작일 : ${s_date}, 종료일 : ${e_date}`);
                    movie_Date(s_date,e_date);

                    }
                }
                // console.log(`movei code : ${move_a_code} and theater_code = ${theater_a_code}`)
                xhr1.open("GET","./ajax/movie_date.php?mov_code="+move_a_code+"&theater_code="+theater_a_code,true);

                xhr1.send();

                // 영화관 변경시 날짜 선택 리셋
            const move_day_week = document.getElementsByClassName('dayWeek');
            const move_day = document.getElementsByClassName('day');
            for(let i = 0; i < move_day_week.length; i++){
                move_day_week[i].style = 'background-color : none';
                move_day[i].style = 'background-color : none';
                if(move_day_week[i].textContent == '일'){
                    move_day_week[i].style = "color : red";
                    move_day[i].style = "color : red";
                }else if(move_day_week[i].textContent == '토'){
                    move_day_week[i].style = "color : blue";
                    move_day[i].style = "color : blue";
                }else{
                    move_day_week[i].style = "color : black";
                    move_day[i].style = "color : black";
                } 
            }
            const send_movie_date = document.getElementById('send_movie_date');
            th_date.innerText = '';
            send_movie_date.value = '';
            
             
         });
     }
       



      // ========= 요일 관련 js ====================
    const move_day_week = document.getElementsByClassName('dayWeek');
    const move_day = document.getElementsByClassName('day');
    const theater_date_r = document.getElementsByClassName("theater_date_r");
    const date_li = document.getElementsByClassName('date_li');
    // console.log(m_last_day.value);
    // console.log(move_day_week.length);
    // console.log(move_day_week[0].textContent);
    for(let i = 0; i < move_day_week.length; i++){
        if(move_day_week[i].textContent == '일'){
            move_day_week[i].style = "color : red";
            move_day[i].style = "color : red";
        }
        if(move_day_week[i].textContent == '토'){
            move_day_week[i].style = "color : blue";
            move_day[i].style = "color : blue";
        }
    }
    const movie_Date = function(s,e){
        const s_date = s;
        const e_date = e;
        // console.log(s_date);
       
        for(let i = 0; i < move_day_week.length; i++){
            
            // console.log(`s_date : ${s_date}, e_date : ${e_date} last day : ${theater_date_r[i].value}`);
            
            if(s_date <= theater_date_r[i].value && e_date >= theater_date_r[i].value){
                date_li[i].id = '';
                if(move_day_week[i].textContent == '일'){
                    move_day_week[i].style = "color : red";
                    move_day[i].style = "color : red";
                 }
                 else if(move_day_week[i].textContent == '토'){
                     move_day_week[i].style = "color : blue";
                    move_day[i].style = "color : blue";
                 }else{
                    move_day_week[i].style = "color : #000000";
                    move_day[i].style = "color : #000000";
                 }
            }else{
                date_li[i].id = 'no_click';
                if(move_day_week[i].textContent == '일'){
                    move_day_week[i].style = "color : #FFA7A7";
                    move_day[i].style = "color : #FFA7A7";
                 }else if(move_day_week[i].textContent == '토'){
                     move_day_week[i].style = "color : #B2CCFF";
                    move_day[i].style = "color : #B2CCFF";
                 }else{
                    move_day_week[i].style = "color : #999999";
                    move_day[i].style = "color : #999999";
                 } 
               
            }
        
        }
       
    }
  
    

    
    // ==================== 요일 선택 =========================
   
    const theater_date = document.getElementsByClassName('theater_date');
    const send_movie_date = document.getElementById('send_movie_date');
    
    for(let i = 0; i < date_li.length; i++){
        date_li[i].addEventListener('click',(e)=>{
            // console.log(date_li[i].textContent);
            // console.log(theater_date[i].value);
           
            if(date_li[i].id != 'no_click'){
                th_date.innerText = theater_date[i].value;
                const send_date = theater_date[i].value;
                send_movie_date.value = send_date.substr(0,send_date.indexOf('('));
                const s_mov_code = send_movie_code.value;
                const s_mov_theater = send_movie_theater.value;
                const s_mov_r_date = send_movie_date.value;
                const s_mov_date = s_mov_r_date.split('.').join('-');
               
                // console.log(`movei code : ${s_mov_code} and theater_code = ${s_mov_theater} and send_movie_date = ${s_mov_date}`);
                if(s_mov_code && s_mov_theater && s_mov_date){
                    console.log(`movei code : ${s_mov_code} and theater_code = ${s_mov_theater} and send_movie_date = ${s_mov_date}`);  
                    time_select(s_mov_code,s_mov_theater,s_mov_date);
                }
                
            }
            se_date(i);
          
            

        })
    }
    const se_date = function(date_no){
       
        const date_li = document.getElementsByClassName('date_li');
        const move_day_week = document.getElementsByClassName('dayWeek');
         const move_day = document.getElementsByClassName('day');
         
        // console.log(`move_day_week[date_no] = ${move_day_week[date_no].textContent} date_li = ${date_li[date_no].id}`)

           for(let i = 0; i < date_li.length; i++){
               if(move_day_week[i].textContent == '일' && date_li[i].id != 'no_click'){
                    date_li[i].style = 'background-color:none; color:red;';
                    move_day_week[i].style =  'background-color:none; color:red;'
                    move_day[i].style =  'background-color:none; color:red;'
               }else if(move_day_week[i].textContent == '토' && date_li[i].id != 'no_click'){
                    date_li[i].style = 'background-color:none; color:blue;';
                    move_day_week[i].style =  'background-color:none; color:blue;'
                    move_day[i].style =  'background-color:none; color:blue;'

               }else if(date_li[i].id == 'no_click'){
                    if(move_day_week[i].textContent == '일'){
                        move_day_week[i].style = "color : #FFA7A7";
                        move_day[i].style = "color : #FFA7A7";
                    }else if(move_day_week[i].textContent == '토'){
                        move_day_week[i].style = "color : #B2CCFF";
                        move_day[i].style = "color : #B2CCFF";
                    }else{
                        move_day_week[i].style = "color : #999999";
                        move_day[i].style = "color : #999999";
                    } 
               
               }else{
                date_li[i].style = 'background-color:none; color:black;';
                move_day_week[i].style =  'background-color:none; color:black;'
                move_day[i].style =  'background-color:none; color:black;'
               }
           

           }
            if(date_li[date_no].id == 'no_click'){
                if(move_day_week[date_no].textContent == '일'){
                    move_day_week[date_no].style = " background-color:none; color : #FFA7A7";
                    move_day[date_no].style = "background-color:none; color : #FFA7A7";
                }else if(move_day_week[date_no].textContent == '토'){
                    move_day_week[date_no].style = " background-color:none; color : #B2CCFF";
                    move_day[date_no].style = " background-color:none; color : #B2CCFF";
                }else{
                    move_day_week[date_no].style = " background-color:none; color : #999999";
                    move_day[date_no].style = " background-color:none; color : #999999";
                } 
            }else{
                date_li[date_no].style = 'background-color:#333333; color:white;';
                move_day_week[date_no].style =  'background-color:#333333; color:white;'
                move_day[date_no].style =  'background-color:#333333; color:white;'
            }

          
        }

    // ============================================== 시간 부분 노드 추가 ========================================= 

    const time_select = function(M_code,M_theater,M_date){

        const xhr1 = new XMLHttpRequest();

        xhr1.onreadystatechange = function(){

            if(xhr1.readyState == XMLHttpRequest.DONE && xhr1.status == 200){


                const rep_date = xhr1.responseText;
                console.log(rep_date);
                const time_body = document.getElementById('time_body');
                time_body.innerHTML = rep_date; 
            

            }
        }
        // console.log(`movei code : ${move_a_code} and theater_code = ${theater_a_code}`)
        xhr1.open("GET","./ajax/movie_time.php?mov_code="+M_code+"&theater_code="+M_theater+"&mov_date="+M_date,true);

        xhr1.send();

    }
    
    
}

