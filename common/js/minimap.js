$(window).load(function(){
    $(function() {
        $('div.showview').hide();
        $('.imgMouseover').hover(function() {
            $('div.showview').fadeIn();
        }, function() {
            $('div.showview').fadeOut();
        });
    });
});