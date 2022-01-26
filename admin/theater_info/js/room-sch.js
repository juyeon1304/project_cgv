"use strict";

function getTheater(city_code){
    const xhr = new XMLHttpRequest(); 

    xhr.onreadystatechange = function(){ 
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
            document.getElementById('theater_name').innerHTML = xhr.responseText;

            let x = 0;
            while(true){
                const theater_name = document.getElementById('theater_name');
                
                getRoom(theater_name.value);
                if(x == 10 || theater_name.value != ''){
                
                    break;
                }
                x++;
            }
            
        }
    }

    xhr.open("GET","room-schP.php?city_code="+city_code, true);
    xhr.send();

}

function getRoom(theater_code) {
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
            document.getElementById("room_name").innerHTML = xhr.responseText;
            const input = xhr.responseText;
        }
    };

    xhr.open("GET", "room-schP.php?theater_code=" + theater_code, true);
    xhr.send();
}

function getMovie(timeM_code) {
    const xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
            document.getElementById("time_run").innerHTML = xhr.responseText;
            const input = xhr.responseText;
        }
    };
    
    xhr.open("GET", "room-schP.php?timeM_code=" + timeM_code, true);
    xhr.send();
}

function endTime(){
    const A =  Number(document.getElementById("time_run").value);
    const B = Number(document.getElementById("time_break").value);
    const set = Number(document.getElementById("time_cycle").value);
    const add = (A+B)*set;
    const ETime = document.getElementById('time_end_date');
    let divi_hour = Math.floor(add / 60);
    let divi_min = add % 60;

    console.log(`러닝타임(${A}) + 브레이크 타임(${B}) = 1세트(${A+B})`);
    console.log(`${set}세트(${add}분) = ${divi_hour}시 ${divi_min}분`);
    console.log(`(A + B) * set  = ${divi_hour}시 ${divi_min}분 `);

    let ST = document.getElementById("time_start_date").value;
        let ST_hour = ST.split(':')[0];
        let ST_min =ST.split(':')[1];
    const ET = document.getElementById("time_end_date");

    

    let end_hour = Number(ST_hour) + Number(divi_hour);
    let end_min = Number(ST_min) + Number(divi_min);
    

    if(end_hour >= 24){
        end_hour = end_hour % 24;        
    }
    if(end_hour < 10){
        end_hour = '0'+ end_hour;
    }

    // 분
    end_min = divi_min;
    if(end_min < 10){
        end_min = '0'+ end_min;
    }

    ETime.value = `${end_hour}:${end_min}`;
    console.log(`시작 시간 : ${ST_hour}시 ${ST_min}분`);
    console.log(`종료 시간 : ${end_hour}시 ${end_min}분`);
};


