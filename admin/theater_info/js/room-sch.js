"use strict";

function getTheater(city_code) {
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
            document.getElementById("theater_name").innerHTML = xhr.responseText;
        }
    };
xhr.open("GET", "room-schP.php?city_code=" + city_code, true);
xhr.send();
}

function getRoom(theater_code) {
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
            document.getElementById("room_name").innerHTML = xhr.responseText;
        }
    };

    xhr.open("GET", "room-schP.php?theater_code=" + theater_code, true);
    xhr.send();
}

function getMovie(M_Code) {
    const xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
            document.getElementById("time_run").innerHTML = xhr.responseText;
        }
    };
    
    xhr.open("GET", "room-schP.php?M_Code=" + M_Code, true);
    xhr.send();
}
