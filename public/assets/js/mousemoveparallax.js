$.fn.parallax = function (resistance, mouse) {
    $el = $(this);
    TweenLite.to($el, 0.2, {
        x: -((mouse.clientX - (window.innerWidth / 2)) / resistance),
        y: -((mouse.clientY - (window.innerHeight / 2)) / resistance)
    });

};
(function ($) {
       "use strict";
       $(document).on('mousemove',function (e) {
           $('.parallax1').parallax(-100, e);
           $('.parallax2').parallax(20, e);
           $('.parallax3').parallax(30, e);
           $('.parallax4').parallax(40, e);
           $('.parallax5').parallax(40, e);
       });
}(jQuery));