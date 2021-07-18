

// 최상단으로 이동
function scrollToTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


// 스크롤 사이드바 fixed positioning

let nav_quick = document.getElementById('nav_quick');
console.log(nav_quick);

document.addEventListener("scroll", function(){
  if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100){
    nav_quick.style.top = "10px";
  }else {
    nav_quick.style.top = "240px";
  }
});
