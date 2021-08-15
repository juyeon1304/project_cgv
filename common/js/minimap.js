$(window).load(function(){
    $(function() {
        $('div.showImage').hide();
        $('.imgMouseover').hover(function() {
            $('div.showImage').fadeIn();
        }, function() {
            $('div.showImage').fadeOut();
        });
    });
});