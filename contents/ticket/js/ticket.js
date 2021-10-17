window.onload = function(){
    // ========= 요일 관련 js ====================
    const move_day_week = document.getElementsByClassName('dayWeek');
    const move_day = document.getElementsByClassName('day');
    const m_last_day = document.getElementById('m_last_day');
    // console.log(m_last_day.value);
    console.log(move_day_week.length);
    console.log(move_day_week[0].textContent);
    for(let i = 0; i < move_day_week.length; i++){
        
        
        if(move_day[i].textContent <= m_last_day.value){
            if(move_day_week[i].textContent == '일'){
                move_day_week[i].style = "color : red";
                move_day[i].style = "color : red";
             }
             if(move_day_week[i].textContent == '토'){
                 move_day_week[i].style = "color : blue";
                move_day[i].style = "color : blue";
             }  
        }else{
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


    //================ 영화 선택 =======================
    const text_mov = document.getElementsByClassName('text_mov');
    const mov_code = document.getElementsByClassName('mov_code');
    const li_mov = document.getElementsByClassName('li_mov');
   

    for(let i = 0; i < text_mov.length; i++){
        text_mov[i].addEventListener('click',(e)=>{
            mov_img(mov_code[i].value);
            for(let i = 0; i < text_mov.length; i++){
                li_mov[i].style = 'background-color : none;';
                text_mov[i].style = ' color : black;'
            }
            li_mov[i].style = 'background-color : #333333;';
             text_mov[i].style = ' color : white;'
            
        });
    };
    const mov_img = function(mov_code){
        const xhr = new XMLHttpRequest();
       
        xhr.onreadystatechange = function(){
            
            if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
                const rep_text = xhr.responseText;
                
                const mov_title = rep_text.substring(rep_text.indexOf(',',0)+1);
                
                const img_code = rep_text.substring(0,rep_text.indexOf(',',0));

                console.log(rep_text);
                console.log(mov_title);
                console.log(img_code);
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


}
