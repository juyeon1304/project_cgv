
'use strict';
let seatBtn = document.querySelector('.btn_seat');
const container = document.getElementById('container');

// wrap_no
const wrap_no = document.createElement('div');
wrap_no.className = 'wrap_no left';
container.appendChild(wrap_no);
    
// wrap_seat
const seatWrap = document.createElement('div');
seatWrap.className = 'wrap_seat left';
container.appendChild(seatWrap);




    let colCnt = Number(document.getElementById('seat_col').value);
    let rowCnt = Number(document.getElementById('seat_row').value);


    // 알파벳 열 표시 생성

    for(let i=0,c=65; i<rowCnt; i++,c++){
        const rowNum =document.createElement('div');
        rowNum.innerHTML = "<span>" + String.fromCharCode([c]) + "</span>";
        rowNum.className = "row_num";
        wrap_no.appendChild(rowNum);
    }


    // 좌석 생성
    for(let i = 0; i<rowCnt;i++){
        const rowWrap = document.createElement('div');
        rowWrap.className = 'wrap_row';
        seatWrap.appendChild(rowWrap);

        for(let j = 0 ; j < colCnt ; j++){
            const seats = document.createElement('span');
            seats.className = 'seat';
            rowWrap.appendChild(seats);
            seats.innerText = j + 1;
        }
    }


        
        
        
        seatBtn.addEventListener('click',function(){


});