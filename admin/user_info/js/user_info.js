'use strict';
window.onload = function(){
    const user_idx = document.getElementsByClassName('user_idx');
    const user_info1 = document.getElementsByClassName('user_info1');
    const user_info2 = document.getElementsByClassName('user_info2');
    const user_info3 = document.getElementsByClassName('user_info3');
    const user_info4 = document.getElementsByClassName('user_info4');
    const user_info5 = document.getElementsByClassName('user_info5');
    const user_info6 = document.getElementsByClassName('user_info6');

    for(let i = 0; i < user_idx.length; i++){
        user_idx[i].addEventListener('click',()=>{
           console.log(user_idx[i].checked);
            if(user_idx[i].checked){
                user_info1[i].style = 'background-color : #B2EBF4';
                user_info2[i].style = 'background-color : #B2EBF4';
                user_info3[i].style = 'background-color : #B2EBF4';
                user_info4[i].style = 'background-color : #B2EBF4';
                user_info5[i].style = 'background-color : #B2EBF4';
                user_info6[i].style = 'background-color : #B2EBF4';
            }else{
                user_info1[i].style = 'background-color : #FFFFFF';
                user_info2[i].style = 'background-color : #FFFFFF';
                user_info3[i].style = 'background-color : #FFFFFF';
                user_info4[i].style = 'background-color : #FFFFFF';
                user_info5[i].style = 'background-color : #FFFFFF';
                user_info6[i].style = 'background-color : #FFFFFF';
            }
          
        });

       
    }
    
  
    

}
function user_type(e,user_type,user_idx,arr_count){
    const select_type = document.getElementsByClassName('select_type');
    console.log(e.value,user_type);
    if(e.value != user_type){
        const xhr = new XMLHttpRequest();
            
        xhr.onreadystatechange = function(){
            if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
                const res_user_info = xhr.responseText;
                const line_no = Number(res_user_info.substring(0,res_user_info.indexOf(',',0)));
                const res_user_type = res_user_info.substring(res_user_info.indexOf(',',0)+1);

                // console.log(select_type[line_no][0].value);
                // console.log(select_type[line_no][1].value);

                alert(`User type이 ${user_type}에서 ${res_user_type} 변경 되었습니다. `);
            }
        }
        xhr.open("GET","./ajax/user_type.php?x_useridx="+user_idx+"&x_user_type="+e.value+"&x_arr_count="+arr_count,true);

        xhr.send();
    }else{
        alert(`${user_type}값은 전과 동일 합니다.`);
    }
    
}