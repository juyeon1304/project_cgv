'use strict'
// popup view
const club_popup = document.getElementsByClassName('club_popup');
const close_btn = document.getElementsByClassName('close_btn');

// console.log(club_popup.length );
//art house popup btn




function popupview(num1){
  num1 = num1 -1;
  //스크롤 위치 확인
  let scrollTop = window.scrollY || document.documentElement.scrollTop;
 

  const club_length = club_popup.length 
  
  // console.log(close_btn.length );
  // console.log(close_btn);
  if(num1 == 2){
    alert('더 새로운 모습으로 찾아올 키즈패밀리 클럽을 기대해 주세요.')
    for(let i=0; i < club_length; i++){
        club_popup[i].style.display = 'none';
      }
  }else{
    if(club_popup[num1].style.display == 'block'){
      club_popup[num1].style.display = 'none';
    }else{
      for(let i=0; i < club_length; i++){
        club_popup[i].style.display = 'none';
      }
      club_popup[num1].style.display = 'block';
    }
  }
    

    for(let i = 0; i < close_btn.length; i++){
      close_btn[i].addEventListener('click',() =>{
      club_popup[i].style.display = 'none';
      });
    }

    //스크롤 위치 이동
    scrollTop=scrollTop+100;
    window.scrollBy(0, 500);
    console.log(scrollTop)
}



window.onload =function(){
  const art_h_btn1 = document.getElementById('art_benefit_btn1');
  const art_h_btn2 = document.getElementById('art_benefit_btn2');
  const art_display1 = document.getElementsByClassName('art_display1');
  const art_display2 = document.getElementsByClassName('art_display2');
  const fdx_btn1 = document.getElementById('fdx_btn1');
  const fdx_btn2 = document.getElementById('fdx_btn2');
  const fdx_btn3 = document.getElementById('fdx_btn3');
  const fdx_card_benefit = document.getElementsByClassName('fdx_card_benefit');
  const fdx_pre_benefit = document.getElementsByClassName('fdx_pre_benefit');
  const fdx_mem_benefit = document.getElementsByClassName('fdx_mem_benefit');

  fdx_btn1.addEventListener('click',()=>{

    for(let i=0; i < fdx_card_benefit.length; i++){
        fdx_card_benefit[i].className = 'fdx_card_benefit art_mission_on';
        if(i==0){
            fdx_card_benefit[i].className = 'fdx_card_benefit height_300 art_mission_on';
        }else{
            fdx_card_benefit[i].className = 'fdx_card_benefit art_mission_on';
        }
        fdx_btn1.style.backgroundColor = '#5b5f68'
        fdx_btn1.style.border="3px solid #ead3d7"
        fdx_btn2.style.border="1px solid gray"
        fdx_btn2.style.backgroundColor = '#222222'
        fdx_btn3.style.border="1px solid gray"
        fdx_btn3.style.backgroundColor = '#222222'
    }
    for(let i=0; i < fdx_pre_benefit.length; i++){
        fdx_pre_benefit[i].className = 'fdx_pre_benefit art_mission_off';
    }
    for(let i=0; i < fdx_mem_benefit.length; i++){
        fdx_mem_benefit[i].className = 'fdx_mem_benefit art_mission_off';
    }

  });  
  fdx_btn2.addEventListener('click',()=>{
    for(let i=0; i < fdx_card_benefit.length; i++){
        fdx_card_benefit[i].className = 'fdx_card_benefit art_mission_off';
    }
    for(let i=0; i < fdx_pre_benefit.length; i++){
        fdx_pre_benefit[i].className = 'fdx_pre_benefit art_mission_on';
    }
    for(let i=0; i < fdx_mem_benefit.length; i++){
        fdx_mem_benefit[i].className = 'fdx_mem_benefit art_mission_off';
    }
        fdx_btn2.style.backgroundColor = '#5b5f68'
        fdx_btn2.style.border="3px solid #ead3d7"
        fdx_btn1.style.border="1px solid gray"
        fdx_btn1.style.backgroundColor = '#222222'
        fdx_btn3.style.border="1px solid gray"
        fdx_btn3.style.backgroundColor = '#222222'

  });  
  fdx_btn3.addEventListener('click',()=>{
    for(let i=0; i < fdx_card_benefit.length; i++){
        fdx_card_benefit[i].className = 'fdx_card_benefit art_mission_off';
    }
    for(let i=0; i < fdx_pre_benefit.length; i++){
        fdx_pre_benefit[i].className = 'fdx_pre_benefit art_mission_off';
    }
    for(let i=0; i < fdx_mem_benefit.length; i++){
        fdx_mem_benefit[i].className = 'fdx_mem_benefit art_mission_on';
    }
        fdx_btn3.style.backgroundColor = '#5b5f68'
        fdx_btn3.style.border="3px solid #ead3d7"
        fdx_btn2.style.border="1px solid gray"
        fdx_btn2.style.backgroundColor = '#222222'
        fdx_btn1.style.border="1px solid gray"
        fdx_btn1.style.backgroundColor = '#222222'
  });  

  art_h_btn2.addEventListener('click',(e)=>{
    const b_name = 'art_benefit_btn2'
    art_title_on(b_name);
  });
  art_h_btn1.addEventListener('click',(e)=>{
    const b_name = 'art_benefit_btn1'
    art_title_on(b_name);
  });

  const art_title_on = function(b_name){
      let c_name = '';

      console.log(b_name);
      if(b_name == 'art_benefit_btn1'){
        for(let i=0; i < art_display2.length ;i++){
          c_name = art_display2[i].className.replace('art_mission_on','art_mission_off');
          art_display2[i].className = c_name;
          
          
        }
        for(let i=0; i < art_display1.length;i++){
          c_name = art_display1[i].className.replace('art_mission_off','art_mission_on');
          art_display1[i].className = c_name;
          
        }
        art_h_btn1.style.backgroundColor = '#5b5f68'
        art_h_btn1.style.border="3px solid #ead3d7"
        art_h_btn2.style.border="1px solid gray"
        art_h_btn2.style.backgroundColor = '#222222'
        // console.log(e.target.id);
      }
      if(b_name == 'art_benefit_btn2'){
        for(let i=0; i < art_display1.length ;i++){
          c_name = art_display1[i].className.replace('art_mission_on','art_mission_off');
          art_display1[i].className = c_name;
          
        }
        for(let i=0; i < art_display2.length;i++){
          c_name = art_display2[i].className.replace('art_mission_off','art_mission_on');
          art_display2[i].className = c_name;
          
        }
        art_h_btn2.style.backgroundColor = '#5b5f68'
        art_h_btn2.style.border="3px solid #ead3d7"
        art_h_btn1.style.border="1px solid gray"
        art_h_btn1.style.backgroundColor = '#222222'
        // console.log(e.target.id);
      }
      
  }
  
}
