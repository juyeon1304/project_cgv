'use strict';
let seatBtn = document.querySelector('.btn_seat');
const containerWrap = document.querySelector('.wrap_container');
const container = document.getElementById('container');


seatBtn.addEventListener('click', function () {
    // const notice = document.querySelector('.notice');
    containerWrap.style.display = "block"

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
    let colAisleNum = Number(document.getElementById('aisle_col').value);
    let rowAisleNum = Number(document.getElementById('seat_row').value);



    // 알파벳 열 표시 생성

    for (let i = 0, c = 65; i < rowCnt; i++, c++) {
        const rowNum = document.createElement('div');
        rowNum.innerHTML = "<span>" + String.fromCharCode([c]) + "</span>";
        rowNum.className = "row_num";
        wrap_no.appendChild(rowNum);
    }


    // 좌석 생성
    for (let i = 0, c= 65; i < rowCnt; i++, c++) {
        const rowWrap = document.createElement('div');
        rowWrap.className = 'wrap_row';
        seatWrap.appendChild(rowWrap);

        for (let j = 0; j < colCnt; j++) {
            const seats = document.createElement('div');
            seats.className = 'seat';
            rowWrap.appendChild(seats);
            // seats.innerText = j + 1;
            seats.innerHTML = `<a href='' data-num='${j + 1}'><span>${ j + 1}</span></a>`;

            const dataValue = `${String.fromCharCode([c])}-${j + 1}`
            seats.setAttribute('data-value', dataValue);
        }
    }

    // let leftOfAisle = document.getElementsByClassName('seat').getAttribute('data-num');
    
    // 복도 만들기(열)
    let seatsData = document.querySelectorAll('.seat > a');
    let colAisleArr = []; //복도 좌석만 담을 배열.
    for (let i = 0; i < seatsData.length; i++) {
        if (seatsData[i].getAttribute('data-num') == colAisleNum) {

            colAisleArr.push(seatsData[i]);
            // console.log(colAisleArr)
        }
    }

    console.log(colAisleArr.length);

    for (let i = 0; i < colAisleArr.length; i++) {
        // console.log(colAisleArr[i].closest('.seat'));
        let div = document.createElement('div');
        colAisleArr[i] = colAisleArr[i].closest('.seat');
        colAisleArr[i].before(div);
        // div.innerHTML('no');
        div.className = 'noseat';
    }




    // 복도 만들기(행)





    // 사용하지 않는 좌석 선택
    for (let i = 0; i < seatsData.length; i++) {
        seatsData[i].addEventListener('click', function (e) {
            e.preventDefault();
            this.closest('.seat').classList.add('selected');
        });
    }

    const applyBtn = document.querySelector('.btn_apply');
    applyBtn.addEventListener('click',function(){

        let selectedArr = document.querySelectorAll('.selected');

        const dataValueArr = [];

        for (let i = 0; i < selectedArr.length; i++) {
            const dataValue = selectedArr[i].getAttribute('data-value');
            // selecteArr.getAttribute('data-value');
            dataValueArr.push(dataValue);
           
        }



        const totalSeats = document.querySelectorAll('.seat').length,
                noSeats = document.querySelectorAll('.selected').length,
                // resultSeatNumber = totalSeats - noSeats;
                resultSeatNumber = document.querySelector('.totalResult');
                resultSeatNumber.value = totalSeats - noSeats;

                console.log(resultSeatNumber)
                // resultSeatNumber.value = resultSeatNumber;



                







        


    });




}); //seatBtn click event end 



















seatBtn.addEventListener('click', function () {


});