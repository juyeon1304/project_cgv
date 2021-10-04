const sendit = function(){
    // alert('sendit() 호출!');
    // return false;   // 입력 오류 발생!
    // return true;    // 모든 입력이 정상적으로 되었을 경우!

    const inputcode = document.getElementById('inputcode');
    const exampleInputFile = document.getElementById('exampleInputFile');
    const inputTitle = document.getElementById('inputTitle');
    const inputTitle_en = document.getElementById('inputTitle_en');
    const inputGenre = document.getElementById('inputGenre');
    const inputRelease = document.getElementById('inputRelease'); 
    const inputDirector = document.getElementById('inputDirector');
    

    // 정규식
    const expNameText = /[가-힣]+$/;
    const expHpText = /^\d{3}-\d{3,4}-\d{4}$/;
    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;



    if(!expNameText.test(name.value)){
        alert('이름 형식을 확인하세요\n한글만 입력 가능합니다');
        name.focus();
        return false;
}

    if(userid.value == ''){
        alert('아이디를 입력하세요');
        userid.focus();
        return false;
    }

    if(userid.value.length < 4 || userid.value.length > 20){
        alert('아이디를 4자이상 20자 이하로 입력하세요');
        userid.focus();
        return false;
    }

    if(ischeckid.value == 'n'){
        alert('아이디 중복확인 버튼을 클릭하세요');
        return false;
    }


    if(userpw.value == ''){
        alert('비밀번호를 입력하세요');
        userpw.focus();
        return false;
    }

    if(userpw.value.length < 4 || userpw.value.length > 20){
        alert('비밀번호를 4자이상 20자 이하로 입력하세요');
        userpw.focus();
        return false;
    }

    if(userpw.value != userpw_re.value){
        alert('비밀번호와 비밀번호 확인의 값이 서로 다릅니다');
        userpw_re.focus();
        return false;
    }

    

    if(!expHpText.test(hp.value)){
        alert('휴대폰번호 형식을 확인하세요');
        hp.focus();
        return false;
    }

    if(!expEmailText.test(email.value)){
        alert('이메일 형식을 확인하세요');
        email.focus();
        return false;
    }

    let count = 0;
    for(let i in hobby){
        if(hobby[i].checked){
            count++;
        }
    }

    if(count == 0){
        alert('취미는 적어도 1개이상 선택하세요');
        return false;
    }

    if(ssn1.value == '' || ssn2.value == ''){
        alert('주민등록번호를 입력하세요');
        ssn1.focus();
        return false;
    }

    if(isssn.value == 'n'){
        alert('주민등록번호 검증버튼을 눌러주세요');
        return false;
    }


    return true;
}

const moveFocus = function(){
    const ssn1 = document.getElementById('ssn1');
    if(ssn1.value.length >= 6){
        document.getElementById('ssn2').focus();
    }
}

const ssnCheck = function(){
    const ssn1 = document.getElementById('ssn1');
    const ssn2 = document.getElementById('ssn2');
    const isssn = document.getElementById('isssn');

    if(ssn1.value == "" || ssn2.value == ""){
        alert('주민등록번호를 입력하세요');
        ssn1.focus();
        return false;
    }

    const ssn = ssn1.value + ssn2.value;
    const s1 = Number(ssn.substr(0, 1)) * 2;
    const s2 = Number(ssn.substr(1, 1)) * 3;
    const s3 = Number(ssn.substr(2, 1)) * 4;
    const s4 = Number(ssn.substr(3, 1)) * 5;
    const s5 = Number(ssn.substr(4, 1)) * 6;
    const s6 = Number(ssn.substr(5, 1)) * 7;
    const s7 = Number(ssn.substr(6, 1)) * 8;
    const s8 = Number(ssn.substr(7, 1)) * 9;
    const s9 = Number(ssn.substr(8, 1)) * 2;
    const s10 = Number(ssn.substr(9, 1)) * 3;
    const s11 = Number(ssn.substr(10, 1)) * 4;
    const s12 = Number(ssn.substr(11, 1)) * 5;
    const s13 = Number(ssn.substr(12, 1));

    let result = s1+s2+s3+s4+s5+s6+s7+s8+s9+s10+s11+s12;
    result = result % 11;
    result = 11 - result;
    if(result >= 10) result = result % 10;

    if(result == s13){
        alert('유효한 주민등록번호입니다');
        isssn.value = 'y';
        
    }else{
        alert('유효하지 않은 주민등록번호입니다');
    }
}

function idcheck(){
    const userid = document.getElementById('userid');
    const ischeckid = document.getElementById('ischeckid');

    if(userid.value == ''){
        alert('아이디를 입력하세요');
        userid.focus();
        return false;
    }

    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
            if(xhr.responseText.trim() == 'n'){
                document.getElementById('idchecktext').innerHTML = "<span style='color:deepskyblue'>사용할 수 있는 아이디입니다</span>";
                ischeckid.value = 'y';
            }else{
                document.getElementById('idchecktext').innerHTML = "<span style='color:red'>사용할 수 없는 아이디입니다";
            }
        }
    }
    xhr.open("GET", "idcheckP.php?userid="+userid.value, true);
    xhr.send();
}


function idchange(){
    const ischeckid = document.getElementById('ischeckid');
    ischeckid.value = 'n';
    document.getElementById('idchecktext').innerHTML = '';
}

function ssnchange(){
    const isssn = document.getElementById('isssn');
    isssn.value = 'n';
}