
$(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    console.log(4444);
    if (windscroll >= 100) {
        $('section').each(function(i) {
            if ($(this).position().top <= windscroll - 20) {
                $('nav a.active').removeClass('active');
                $('nav a').eq(i).addClass('active');
            }
        });

    } else {

        $('nav').removeClass('fixed');
        $('nav a.active').removeClass('active');
        $('nav a:first').addClass('active');
    }

}).scroll();
