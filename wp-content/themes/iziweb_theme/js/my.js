$(document).ready(function () {
    $('.menu-blog p a').click(function (e) {
            $('.menu-porfolio').removeClass('menu');
    });
    
    $('.menu-porfolio li a').click(function(e){
       $('.menu-blog').removeClass('menu'); 
    });

    $('#main-nav li a[href="#portfolio"]').click(function (e) {
        $('.menu-porfolio').addClass('menu');
    });
    
    $('#main-nav li a[href="#blog"]').click(function (e) {
        $('.menu-blog').addClass('menu');
    });
});


