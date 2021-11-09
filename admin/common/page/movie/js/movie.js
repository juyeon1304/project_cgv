// document.write('안녕하세요. JavaScript!');
// console.log('안녕하세요. JavaScript!');
// alert('아이디를 입력하세요');

const sendit = function(){

    const inputcode = document.getElementById('inputcode');
    const inputTitle = document.getElementById('inputTitle');
    const inputTitle_en = document.getElementById('inputTitle_en');
    const inputGenre = document.getElementById('inputGenre');
    const inputRelease = document.getElementById('inputRelease');
    const inputDirector = document.getElementById('inputDirector');
    const inputActor = document.getElementById('inputActor');
    
}
//     if(inputcode.value.length < 6){
//         alert('영화 코드 6자리를 다시 입력하세요.');
//         inputcode.value = '';
//         inputcode.focus();
//         return false;
//     }
//     if(inputTitle.value == 'n'){
//         alert('영화 제목을 입력하세요.');
//         inputTitle.value = '';
//         inputTitle.focus();
//         return false;
//     }
//     if(inputTitle_en.value == 'n'){
//         alert('영화의 영문 제목을 입력하세요.');
//         inputTitle_en.value = '';
//         inputTitle_en.focus();
//         return false;
//     }
//     if(inputGenre.value == 'n' ){
//         alert('영화의 장르를 입력하세요.');
//         inputGenre.value = '';
//         inputGenre.focus();
//         return false;
//     }
//     if(inputRelease.value == 'n' ){
//         alert('개봉일을 입력하세요.');
//         inputRelease.value = '';
//         inputRelease.focus();
//         return false;
//     }
//     if(inputDirector.value == 'n' ){
//         alert('해당 영화의 감독을 입력하세요.');
//         inputDirector.value = '';
//         inputDirector.focus();
//         return false;
//     }
//     if(inputActor.value == 'n' ){
//         alert('영화 배우를 입력하세요.');
//         inputActor.value = '';
//         inputActor.focus();
//         return false;
//     }
    
// return true;
// }


// const nameCheck = function(e){
    
//     let username = e.value;
    
//     let strLength = 0;
//     let chrData = null;
//     for(var i=0; i<username.length; i++) {
//         chrData = escape(username.charAt(i));
//         if(chrData.length == 1) {
//             strLength ++;
//         } else if (chrData.indexOf("%u") != -1) {
//             strLength += 2;
//         } else if (chrData.indexOf("%") != -1) {
//             strLength += chrData.length/3;
//         }
//     }
//     // console.log(strLength);
//     if(strLength <= 10){
//         nameSet.value = 'y';
//     }else{
//         nameSet.value = 'n';
//         alert('이름이 너무 깁니다.');
//         return false;
//     }
    
// }

// const idcheck = function(){
//     const userid = document.getElementById('userid');
//     const idset = document.getElementById('idset');
//     const hidden_li = document.getElementsByClassName('hidden_li');
//     const page_type = document.getElementById('page_type');
    

//     if(userid.value == '' || userid.value.length < 4){
//         alert("아이디를 4글자 이상 입력하세요.");
//         userid.focus();
//         return false;

//     }
//         const cUserid = userid.value;

//         console.log(cUserid);
//         const xhr = new XMLHttpRequest();
       
//         xhr.onreadystatechange = function(){
            
//             if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
//                 if(xhr.responseText.trim() == 'y'){
//                     for(let i=0; i<hidden_li.length;i++){
//                         hidden_li[i].className = "hidden_li hidden_on"
                        
//                         console.log(hidden_li.length); 
//                     }
//                     document.getElementById('idchecktext').innerHTML = '<span style="color:blue">사용할 수 있는 아이디입니다.</span>';
//                     idset.value = 'y';    

//                 }else{
                     
//                     for(let i=0; i<hidden_li.length;i++){
//                         hidden_li[i].className = "hidden_li hidden_on"
//                     }
//                     document.getElementById('idchecktext').innerHTML = '<span style="color:red">사용할 수 없는 아이디입니다.</span>';                       
//                 }                
//             }
//         }

        
//         if(!page_type){
            
//             xhr.open("GET","./ajax/user_idcheck.php?x_userid="+cUserid,true);
//         }else{
//             xhr.open("GET","../../admin/user_info/ajax/user_idcheck.php?x_userid="+cUserid,true);
//         }
       

//         xhr.send();

// }