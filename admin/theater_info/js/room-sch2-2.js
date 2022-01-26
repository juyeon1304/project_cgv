




// 정비시간 입력 버튼 클릭
    const breakBtn = document.getElementById('btn_calc');

    breakBtn.addEventListener('click',function(){
        const breaktime = Number(document.querySelector('#breaktime input').value);
        const runTime = Number(document.querySelector('#movie_run').value);
        const cnt = Number(document.querySelector('#cnt').value);
        let startTime = document.getElementById('time_start').value;
        const endTime = document.getElementById('time_end');
        let hours = parseInt(startTime.split(':')[0]);
        let minutes = parseInt(startTime.split(':')[1]);

        // 상영시작시간 + { ( 러닝타임 + 정비시간 ) * 상영 횟수 }  = 종료시간 

        // 상영시작시간 
        startTime = hours*60 + minutes;

        //{ ( 러닝타임 + 정비시간 ) * 상영 횟수 }
        const plusNum = ( runTime + breaktime ) * cnt ;

        let totalTime = startTime + plusNum;

        hours = Math.floor(totalTime / 60);

        // 시
        if(hours >= 24){
            hours = hours % 24;        
        }
        if(hours < 10){
            hours = '0'+ hours;
        }

        // 분
        minutes = totalTime % 60;
        if(minutes < 10){
            minutes = '0'+ minutes;
        }

        endTime.value = `${hours}:${minutes}`;
        

        // minutes += plusNum; //plusNum 더해주기 ex)183

        // if (minutes >= 60) {
        //     hours = (hours + 1) % 24;
        //     minutes -= 60;
        // }
        
    
        // endTime.value = finalTime;


});



// 러닝 타임 가져오기
function getBreaktime(movie_code){
    const xhr = new XMLHttpRequest(); 

    xhr.onreadystatechange = function(){ 
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
            document.getElementById('movie_run').innerHTML = xhr.responseText;
        }
    }

    xhr.open("GET","room-schP2.php?movie_code="+movie_code, true);
    xhr.send();

    
}

