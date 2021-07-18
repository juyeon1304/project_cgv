$(function() {

  var swiper = new Swiper(".sec_visual .slide", {
    autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
    navigation: {
      nextEl: ".sec_visual .slide .btn_next",
      prevEl: ".sec_visual .slide .btn_prev",
    },
    loop:true
  });


});
