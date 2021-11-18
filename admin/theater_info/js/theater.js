const sendit = function(){

    const inputName = document.getElementById('inputName');
    const inputTel = document.getElementById('inputTel'); 
    const ssn1 = document.getElementById('ssn1');
    const ssn2 = document.getElementById('ssn2');
    const isssn = document.getElementById('isssn');
    const expNameText = /[가-힣]+$/;
    // const expHpText = /^\d{3}-\d{3,4}-\d{4}$/;

    // 전화번호 숫자만 받기
    const expHpText = /^[0-9]+$/;
    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;


    if(inputName.value == ''){
        alert('영화관 이름을 입력하세요');
        inputName.focus();
        return false;
    }


    if(!expHpText.test(inputTel.value)){
        alert('전화번호 형식을 확인하세요');
        inputTel.focus();
        return false;
    }


    
    return true;
}


