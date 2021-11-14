const sendit = function(){

    const roomName = document.getElementById('roomName'); 
    const roomEtc = document.getElementById('roomEtc');
    const roomSeat = document.getElementById('roomSeat');

    // 한글만 받기
    const expKrText = /[가-힣]+$/;

    // 한글 + 숫자만 받기
    // const expRoomNameText = /^[0-9]+\.[A-Za-z0-9\.\-]+$/;

    // 숫자만 받기
    const expNumText = /^[0-9]+$/;


    const expEmailText = /^[A-Za-z0-9\.\-]+@[A-Za-z0-9\.\-]+\.[A-Za-z0-9\.\-]+$/;


    if(roomName.value == ''){
        alert('상영관 이름을 입력하세요');
        roomName.focus();
        return false;
    }

    // 상영관 이름 정규식 검사 
    // if(!expNumText.test(roomName.value)){
    //     alert("상영관 이름 예시 : 'N관' ");
    //     roomName.focus();
    //     return false;
    // }


    if(!expNumText.test(roomSeat.value)){
        alert('숫자만 입력하세요.');
        roomSeat.focus();
        return false;
    }


    
    return true;
}
