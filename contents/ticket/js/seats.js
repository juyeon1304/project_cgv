'use strict';
window.onload = function(){
    const fd_seat = [1,2,3];
    let seat_click = [];
    //클릭여부를 저장할 변수
    let seat_click_flag = [];
    const seat_len = {
        type : [] ,
        quatity :[]
    }
    
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
    
    // 좌석 선택 갯수 받아 오는 함수
    const seat_lent_fun = function(ticket_type,num1){
        // console.log(`${seat_len.type.length}, ${seat_len.type[seat_len.type.length]}`);
        let obj_count = seat_len.type.length;
        seat_len.type[obj_count]= ticket_type;
        seat_len.quatity[obj_count] = num1;
        for(let i=0; i <seat_len.type.length ;i++){
            
            console.log(`${seat_len.type.length}, ${seat_len.type[i]}, ${seat_len.quatity[i]}`);
        }
       
        
    }

    for(let i =0,s_no=1; i < 49; i++,s_no++){
            if(s_no > 7){
                s_no = 1;
            }
        class_seat[i].innerText = s_no;
        if(fd_seat.includes(i+1)){
            class_seat[i].style.border = "1px solid green";
        }

        class_seat[i].addEventListener('click',()=>{
            check_div(i,seat_len);
        });

        class_seat[i].addEventListener('mouseover',()=>{
            m_over(i,seat_len);
        });

        class_seat[i].addEventListener('mouseout',()=>{
            m_out(i,seat_len);
        });
    }

    const check_div = function(num1,no_len){
        //클릭된 죄석이라면
     
            for(let i=0; i < no_len; i++){
                if( (seat_click_flag[num1+i]) ){
                    class_seat[num1+i].style.backgroundColor = "rgb(187, 187, 187)";
                    seat_click_flag[num1+i] = false;
                    if(fd_seat.includes(num1+1)){
                        // console.log(`num1 : ${num1}, fd_seat.indexof : ${fd_seat.includes(num1+1)}`);
                        class_seat[num1+i].style.border = "1px solid green";
                    }

                }else{
                    class_seat[num1+i].style.backgroundColor = "red";
                    seat_click_flag[num1+i] = true;
                }
            }

    }

    const m_over = function(num1,no_len){
      
         
            for(let i=0; i < no_len; i++){
                if( (!seat_click_flag[num1+i]) ){
                    class_seat[num1+i].style.backgroundColor = "red";
                }
            }
       
   }

    const m_out = function(num1,no_len){
        //초기상태이거나 클릭한 죄석이 아닌 경우
        for(let i=0; i < no_len; i++){
            if( (seat_click_flag[num1] == '') || (!seat_click_flag[num1+i]) ){
                class_seat[num1+i].style.backgroundColor = "rgb(187, 187, 187)";
            }
        }
                
    }   
            
        
            
        




   // ----------------------------------------- 예매 좌석 갯수 선택 ------------------------------

   const select_no1 = document.getElementsByClassName('select_no1');
   for(let i = 0; i < select_no1.length;i++){
       select_no1[i].addEventListener('click',()=>{
           console.log(select_no1[i].innerText);
           seat_lent_fun('nomal',select_no1[i].innerText);
        for(let z = 0 ; z < select_no1.length;z++){
            let parents = select_no1[z].parentElement;
            parents.className = '';
        }
        let parents = select_no1[i].parentElement;
        parents.className = 'selected';
       })
       
   }

   const select_no2 = document.getElementsByClassName('select_no2');
   for(let i = 0; i < select_no2.length;i++){
       select_no2[i].addEventListener('click',()=>{
           console.log(select_no2[i].innerText);
           seat_lent_fun('Youth',select_no1[i].innerText);
        for(let z = 0 ; z < select_no2.length;z++){
            let parents = select_no2[z].parentElement;
            parents.className = '';
        }
        let parents = select_no2[i].parentElement;
        parents.className = 'selected';
       })
       
   }

   const select_no3 = document.getElementsByClassName('select_no3');
   for(let i = 0; i < select_no3.length;i++){
       select_no3[i].addEventListener('click',()=>{
           console.log(select_no3[i].innerText);
           seat_lent_fun('senior',select_no1[i].innerText);
        for(let z = 0 ; z < select_no3.length;z++){
            let parents = select_no3[z].parentElement;
            parents.className = '';
        }
        let parents = select_no3[i].parentElement;
        parents.className = 'selected';
       })
       
   }

   const select_no4 = document.getElementsByClassName('select_no4');
   for(let i = 0; i < select_no4.length;i++){
       select_no4[i].addEventListener('click',()=>{
           console.log(select_no4[i].innerText);
           seat_lent_fun('special',select_no1[i].innerText);
        for(let z = 0 ; z < select_no4.length;z++){
            let parents = select_no4[z].parentElement;
            parents.className = '';
        }
        let parents = select_no4[i].parentElement;
        parents.className = 'selected';
       })
       
   }



}