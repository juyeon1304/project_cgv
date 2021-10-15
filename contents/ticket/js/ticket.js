window.onload = function(){
    const move_day_week = document.getElementsByClassName('dayWeek');
    const move_day = document.getElementsByClassName('day');
    const m_last_day = document.getElementById('m_last_day');
    // console.log(m_last_day.value);
    console.log(move_day_week.length);
    console.log(move_day_week[0].textContent);
    for(let i = 0; i < move_day_week.length; i++){
        
        if(move_day_week[i].textContent == '일'){
           move_day_week[i].style = "color : red";
           move_day[i].style = "color : red";
        }
        if(move_day_week[i].textContent == '토'){
           move_day[i].style = "color : blue";
           move_day[i].style = "color : blue";
        }  
        if(move_day[i].textContent >= m_last_day.value){
            move_day[i].style = "color : #999999";
            move_day[i].style = "color : #999999";
        } 
    
    }
}
