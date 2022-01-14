"use strict";

const sendit = function(){

    const exampleInputFile = document.getElementById('exampleInputFile');
    const inputTitle = document.getElementById('inputTitle');
    const inputTitle_en = document.getElementById('inputTitle_en');
    const inputGenre = document.getElementById('inputGenre');
    const inputRelease = document.getElementById('inputRelease');
    const inputSummary = document.getElementById('inputSummary');
    const inputDirector = document.getElementById('inputDirector');
    const inputActor = document.getElementById('inputActor');
    const inputReleaseS = document.getElementById('inputReleaseS');
    const inputReleaseE = document.getElementById('inputReleaseE');
    
    if(exampleInputFile.value ==''){
        alert('사진을 등록하여 주세요.');
        exampleInputFile.focus();
        return false;
    }
    if(inputTitle.value ==''){
        alert('한글 영화 제목을 입력하세요');
        inputTitle.focus();
        return false;
    }
    if(inputTitle.value.length < 2 || inputTitle.value.length > 50){
            alert('제목을 2자이상 50자 이하로 입력하세요');
            inputTitle.focus();
            return false;
    }
    if(inputTitle_en.value ==''){
        alert('영문 영화 제목을 입력하세요');
        inputTitle_en.focus();
        return false;
    }
    if(inputTitle.value.length < 2 || inputTitle.value.length > 50){
            alert('제목을 2자이상 50자 이하로 입력하세요');
            inputTitle.focus();
            return false;
    }
        let count = 0;
        for(let i in inputGenre){
            if(inputGenre[i].checked){
                count++;
            }
        }
        if(inputGenre == 0){
            alert('장르는 적어도 1개이상 선택하세요');
            inputGenre.focus();
            return false;
        }
        
    if(inputRelease.value ==''){
        alert('영화 개봉일을 입력하세요');
        inputRelease.focus();
        return false;
    }
    if(inputSummary.value ==''){
        alert('영화 줄거리를 입력하세요');
        inputSummary.focus();
        return false;
    }
    if(inputSummary.value.length < 2 || inputSummary.value.length > 300){
        alert('줄거리를 2자이상 300자 이하로 입력하세요');
        inputSummary.focus();
        return false;
    }
    if(inputDirector.value ==''){
        alert('영화 감독을 입력하세요');
        inputDirector.focus();
        return false;
    }
    if(inputActor.value ==''){
        alert('영화 배우를 입력하세요');
        inputActor.focus();
        return false;
    }
    if(inputReleaseS.value ==''){
        alert('상영 시작일을 입력하세요');
        inputReleaseS.focus();
        return false;
    }
    if(inputReleaseE.value ==''){
        alert('상영 종료일을 입력하세요');
        inputReleaseE.focus();
        return false;
    }
    
    return true;
    }