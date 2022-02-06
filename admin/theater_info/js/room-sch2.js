



function getRoom(theater_code){

    const xhr = new XMLHttpRequest(); 
    // console.log(`theater_name : ${theater_code}`);
    

    xhr.onreadystatechange = function(){ 
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
            document.getElementById('room_name').innerHTML = xhr.responseText;
        }
    }

    xhr.open("GET","room-schP2.php?theater_code="+theater_code, true);
    xhr.send();

}


function getTheater(city_code){
    const xhr = new XMLHttpRequest(); 

    xhr.onreadystatechange = function(){ 
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
            document.getElementById('theater_name').innerHTML = xhr.responseText;

            let x = 0;
            while(true){
                const theater_name = document.getElementById('theater_name');
                
                
                getRoom(theater_name.value);
                if(x == 10 || theater_name.value != ''){
                  
                    break;
                }
                x++;
            }
            
        }
    }

    xhr.open("GET","room-schP2.php?city_code="+city_code, true);
    xhr.send();

}



// 러닝 타임 가져오기
function getRuntime(movie_code){

    const xhr = new XMLHttpRequest(); 

    xhr.onreadystatechange = function(){ 
        if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200){
            document.getElementById('movie_run').innerHTML = xhr.responseText;

            console.log(xhr.responseText);
        }
    }

    xhr.open("GET","room-schP2.php?movie_code="+movie_code, true);
    xhr.send();



    

}

