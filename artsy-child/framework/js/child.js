// jQuery(document).ready(function($){
//     var offset = 75;
//     var speed = 250;
//     var duration = 500;
//     $(window).scroll(function(){
//         if ($(this).scrollTop() < offset) {
//             $('.button-scroll') .fadeOut(duration);
//         } else {
//             $('.button-scroll') .fadeIn(duration);
//         }
//     });
//     $('.button-scroll').on('click', function(){
//         $('html, body').animate({scrollTop:0}, speed);
//         return false;
//     });
//
// });


jQuery(function ($) {
    var $buttonTop = $('.button-top');

    $buttonTop.on('click', function () {
        $('html, body').animate({
            scrollTop: 0,
        }, 400);
    });
});
