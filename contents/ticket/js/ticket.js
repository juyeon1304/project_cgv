'use strict';

window.onload = function(){
   





    //================ 영화 선택 =======================
    const text_mov = document.getElementsByClassName('text_mov');
    const mov_code = document.getElementsByClassName('mov_code');
    const li_mov = document.getElementsByClassName('li_mov');
    const s_date  = document.getElementsByClassName('s_date');
    const e_date  = document.getElementsByClassName('E_date');
    const th_date = document.getElementById('th_date');
    const th_name = document.getElementById('th_name');

    for(let i = 0; i < text_mov.length; i++){
        text_mov[i].addEventListener('click',(e)=>{
            mov_img(mov_code[i].value);
            th_date.innerText = '';
            th_name.innerText = '';
            for(let i = 0; i < text_mov.length; i++){
                li_mov[i].style = 'background-color : none;';
                text_mov[i].style = ' color : black;'
            }
            li_mov[i].style = 'background-color : #333333;';
             text_mov[i].style = ' color : white;'
            //  console.log(s_date[i].value);

             movie_Date(s_date[i].value,e_date[i].value);

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
                          const  li = document.createElement('li');
                            li.innerText=area_arr[i];
                            parent.appendChild(li);
                           
                            
                        }
                        // 추가된 노드에 className 삽입
                        const add_li = parent.childNodes;
                        // console.log(add_li.length);
                        for(let i = 0; i < add_li.length; i++){
                            add_li[i].className = 'area_li';
                        }

                         // ======================== 상영관 선택 ==============================
                        const area_li = document.getElementsByClassName('area_li');

                        for(let i=0; i < area_li.length; i++){
                            area_li[i].addEventListener('click',(e)=>{
                                for(let x = 0; x<area_li.length ; x++){
                                    area_li[x].style = 'background-color : none;color : black;';
                                }
                                e.target.style = 'background-color : #333333;color : white;';
                                
                                th_name.innerText = e.target.textContent;
                                
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

     for(let i=0; i < area_li.length; i++){
         
        
         area_li[i].addEventListener('click',(e)=>{

            for(let x = 0; x<area_li.length ; x++){
                area_li[x].style = 'background-color : none;color : black;';
            }
             e.target.style = 'background-color : #333333;color : white;';
             const th_name = document.getElementById('th_name');
             th_name.innerText = e.target.textContent;
             
         });
     }
       



      // ========= 요일 관련 js ====================
    const move_day_week = document.getElementsByClassName('dayWeek');
    const move_day = document.getElementsByClassName('day');
    const m_last_day = document.getElementById('m_last_day');
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
        // 영화 변경시 상영관 선택 리셋.
        for(let i = 0; i < area_li.length; i++){
            area_li[i].style = 'background-color : none;color : black;';
        }
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
  
    for(let i = 0; i < date_li.length; i++){
        date_li[i].addEventListener('click',(e)=>{
            // console.log(date_li[i].textContent);
            // console.log(theater_date[i].value);
            if(date_li[i].id != 'no_click'){
                th_date.innerText = theater_date[i].value;
            }

        })
    }
    
}

