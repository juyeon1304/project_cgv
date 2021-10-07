
const sendit = function(){

    const nameSet = document.getElementById('nameSet');
    const user_name = document.getElementById('user_name');
    const idset = document.getElementById('idset');
    const userid = document.getElementById('userid');
    const userpw = document.getElementById('userpw');
    const c_userpw = document.getElementById('c_userpw');
    const p_no = document.getElementById('p_no');
    const email = document.getElementById('email');


    //핸드폰 번호 정규식 패턴
    const expHpText = /^\d{3}-\d{3,4}-\d{4}$/
    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;

   if(nameSet.value == 'n'){
       alert('이름을 다시 확인해 주세요.');
       user_name.value = '';
       user_name.focus();
       return false;
   }
   if(idset.value == 'n'){
       alert('아이디를 다시 입력하세요.');
       userid.value = '';
       userid.focus();
       return false;
   }
   if(userpw.value.length < 8 ){
    alert('패스워드를 8글자 이상 입력하세요.');
    userpw.value = '';
    userpw.focus();
    return false;
   }
   if(userpw.value != c_userpw.value){
    alert('입력한 패스워드가 다릅니다.');
    c_userpw.value = '';
    c_userpw.focus();
    return false;
   }

    if(!expHpText.test(p_no.value) || p_no.value == ''){
        alert('휴대폰 번호 형식을 확인 하세요.')
        p_no.focus();
        return false;
    }

    if(!expEmailText.test(email.value) || email.value == ''){
        alert('이메일 형식을 확인 하세요.')
        email.focus();
        return false; 
    }



   return true;
}


const nameCheck = function(e){
    
    let username = e.value;
    
    let strLength = 0;
    let chrData = null;
    for(var i=0; i<username.length; i++) {
        chrData = escape(username.charAt(i));
        if(chrData.length == 1) {
            strLength ++;
        } else if (chrData.indexOf("%u") != -1) {
            strLength += 2;
        } else if (chrData.indexOf("%") != -1) {
            strLength += chrData.length/3;
        }
    }
    // console.log(strLength);
    if(strLength <= 10){
        nameSet.value = 'y';
    }else{
        nameSet.value = 'n';
        alert('이름이 너무 깁니다.');
        return false;
    }
    
}

const idcheck = function(){
    const userid = document.getElementById('userid');
    const idset = document.getElementById('idset');
    const hidden_li = document.getElementsByClassName('hidden_li');
    const page_type = document.getElementById('page_type');
    

    if(userid.value == '' || userid.value.length < 4){
        alert("아이디를 4글자 이상 입력하세요.");
        userid.focus();
        return false;

    }
        const cUserid = userid.value;

        console.log(cUserid);
        const xhr = new XMLHttpRequest();
       
        xhr.onreadystatechange = function(){
            
            if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
                if(xhr.responseText.trim() == 'y'){
                    for(let i=0; i<hidden_li.length;i++){
                        hidden_li[i].className = "hidden_li hidden_on"
                        
                        console.log(hidden_li.length); 
                    }
                    document.getElementById('idchecktext').innerHTML = '<span style="color:blue">사용할 수 있는 아이디입니다.</span>';
                    idset.value = 'y';    

                }else{
                     
                    for(let i=0; i<hidden_li.length;i++){
                        hidden_li[i].className = "hidden_li hidden_on"
                    }
                    document.getElementById('idchecktext').innerHTML = '<span style="color:red">사용할 수 없는 아이디입니다.</span>';                       
                }                
            }
        }

        
        if(!page_type){
            
            xhr.open("GET","./ajax/user_idcheck.php?x_userid="+cUserid,true);
        }else{
            xhr.open("GET","../../admin/user_info/ajax/user_idcheck.php?x_userid="+cUserid,true);
        }
       

        xhr.send();

}

  
    



