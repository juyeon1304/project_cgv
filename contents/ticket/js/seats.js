'use strict';
window.onload = function(){
    const fd_seat = [1,2,3];
    let seat_click = [];
    //클릭여부를 저장할 변수
    let seat_click_flag = [];

    const container = document.getElementById('container');
    const s_line_no = document.createElement('div');
    s_line_no.className = "s_seat_no";
    container.appendChild(s_line_no);


    const seat_contain = document.createElement('div')
    seat_contain.id = "s_contain";


    container.appendChild(seat_contain);

    for(let i=0,c=65; i<7; i++,c++){
        const l_no =document.createElement('div');
        l_no.innerHTML= String.fromCharCode([c])
        l_no.className = "l_position";
        s_line_no.appendChild(l_no);

    }

    for(let i = 0; i<7;i++){
        const contain_div = document.createElement('div');
        contain_div.className = 'c_position';

        seat_contain.appendChild(contain_div);
        for(let j = 0 ; j < 7 ; j++){
            const seat_div = document.createElement('div');
            seat_div.className = 's_position';
            contain_div.appendChild(seat_div);

        }
    }

    const class_seat = document.getElementsByClassName('s_position');


    for(let i =0,s_no=1; i < 49; i++,s_no++){
            if(s_no > 7){
                s_no = 1;
            }
        class_seat[i].innerText = s_no;
        if(fd_seat.includes(i+1)){
            class_seat[i].style.border = "1px solid green";
        }

        class_seat[i].addEventListener('click',()=>{
            check_div(i);
        });

        class_seat[i].addEventListener('mouseover',()=>{
            m_over(i);
        });

        class_seat[i].addEventListener('mouseout',()=>{
            m_out(i);
        });
    }

    const check_div = function(num1){
        //클릭된 죄석이라면
        if(seat_click_flag[num1]){
            class_seat[num1].style.backgroundColor = "rgb(187, 187, 187)";
            seat_click_flag[num1] = false;

            if(fd_seat.includes(num1+1)){
                console.log(`num1 : ${num1}, fd_seat.indexof : ${fd_seat.includes(num1+1)}`);
                class_seat[num1].style.border = "1px solid green";
            }
        }else{
            class_seat[num1].style.backgroundColor = "red";
            seat_click_flag[num1] = true;
        }
    }

    const m_over = function(num1){
       class_seat[num1].style.backgroundColor = "red";
   }

    const m_out = function(num1){
        //초기상태이거나 클릭한 죄석이 아닌 경우
        if((seat_click_flag[num1] == '') || (!seat_click_flag[num1])) {
            class_seat[num1].style.backgroundColor = "rgb(187, 187, 187)";
        }
   }
} //end
