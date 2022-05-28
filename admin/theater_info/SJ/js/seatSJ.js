'use strict';

console.log("row(초기 값) : ",row);
console.log("col(초기 값) : ",col);

console.log("nrline1(초기 값) : ",nrline1);
console.log("nrline2(초기 값) : ",nrline2);

console.log("ncline1(초기 값) : ",ncline1);
console.log("ncline2(초기 값) : ",ncline2);

window.onload = function(){
    if(ncline1 > 0){
        row = row + 1;
        console.log("row(if1) : ",row);
        if(ncline2 > 0){
            row = row + 1; 
            console.log("row(if2) : ",row);
        }
    }

    if(nrline1 > 0){
        col = col + 1;
        console.log("col(if1) : ",col);
        if(nrline2 > 0){
            col = col + 1; 
            console.log("col(if2) : ",col);
        }
    }

    const fd_seat = [1,2,3];
    let seat_click = [];
     //클릭여부를 저장할 변수
    let seat_click_flag = [];

    const container = document.getElementById('container');
    const ABCblock = document.createElement('div');
    ABCblock.className = "abcblock";
    container.appendChild(ABCblock);

    for(let i=0,ch=65; i<col; i++, ch++){
        
        if(nrline1 >0){
        if(nrline1 == i){
        var nullABC = document.createElement('div');
        nullABC.className = "nullabc";
        ABCblock.appendChild(nullABC);
        }}
        if(nrline1 >0){
        if(nrline2 == i){
            var nullABC = document.createElement('div');
            nullABC.className = "nullabc";
            ABCblock.appendChild(nullABC);
        }}
        var ABCbox = document.createElement('div');
        ABCbox.innerHTML = String.fromCharCode([ch]);
        ABCbox.className = "abcbox";
        ABCblock.appendChild(ABCbox);
        
    }

    const NUMblock = document.createElement('div');
    NUMblock.id = "numblock";
    container.appendChild(NUMblock);
    
    var now1 = nrline1 -1;
    var now2 = nrline2 ;

    for(var i=0; i<col; i++){
        
        if(nrline1>0){
        if(nrline1 == i){
        var Nulline = document.createElement('div');
        Nulline.className = 'nulline';
        NUMblock.appendChild(Nulline);
        for(let j=0; j<row; j++){
        var Nullbox = document.createElement('div');
            Nullbox.className = 'nullbox';
            Nulline.appendChild(Nullbox);
        }}
        }
        if(nrline1>0){
        if(nrline2 == i){
        var Nulline = document.createElement('div');
        Nulline.className = 'nulline';
        NUMblock.appendChild(Nulline);
        for(let j=0; j<row; j++){
        var Nullbox = document.createElement('div');
            Nullbox.className = 'nullbox';
            Nulline.appendChild(Nullbox);
        }}
        }
        var NUMline = document.createElement('div');
        NUMline.className = 'numline';
        NUMblock.appendChild(NUMline);
        
        
        var nol1 = ncline1 -1;
        var nol2 = ncline2 ;
        
        for(let j=0; j<row; j++){
            
            if(nol1 == j){
            const Nolbox = document.createElement('div');
            Nolbox.className = 'nolbox';
            NUMline.appendChild(Nolbox);
            }else if(nol2 == j){
            const Nolbox = document.createElement('div');
            Nolbox.className = 'nolbox';
            NUMline.appendChild(Nolbox);
            }else{
            
            const NUMbox = document.createElement('div');
            NUMbox.className = 'numbox';
            NUMline.appendChild(NUMbox);
            }
        }
        
    }

    const class_seat = document.getElementsByClassName('numbox');
    const total = row * col;
    console.log("total : ", total);
    
    if(ncline2 >0){
        row = row - 1;
    }
    for(let i =0,s_no=1; i < total; i++,s_no++){
        if(s_no > row-1){
            s_no = 1;
        }
        class_seat[i].innerText = s_no;
        if(fd_seat.includes(i+1)){
            class_seat[i].style.border = "";
        }
        
    }
}