'use strict';

window.onload = function() {
    const de_menu1 = document.getElementById('de_menu1')
    const de_menu2 = document.getElementById('de_menu2')
    const de_contain1 = document.getElementById('de_contain1'); 
    const de_contain2 = document.getElementById('de_contain2'); 

    de_menu1.addEventListener('click',(e)=>{
    menu_click(e.target.id);
    
    });
    de_menu2.addEventListener('click',(e)=>{
    menu_click(e.target.id);
    
    });
    const menu_click = function(m_id) {
      if(m_id == 'de_menu1'){
        de_menu1.style = 'background-color : #999999'
        de_menu2.style = 'background-color : #ffffff'
        de_contain1.className = 'dis_on';
        de_contain2.className = 'dis_off';

      }
      if(m_id == 'de_menu2'){
        de_menu2.style = 'background-color : #999999'
        de_menu1.style = 'background-color : #ffffff'
        de_contain1.className = 'dis_off';
        de_contain2.className = 'dis_on';
      }
       
        
    }
}

const pass_check = function(){
    const c_password = document.getElementById('c_password');
    if(c_password.value.length < 8 ){
        alert('비밀번호는 8글자 이상으로 입력해 주세요.');
        c_password.focus();
        return false;

    }
    
}

