var stateScrollFox = true;
var stateScrollLetter = true;
$(window).scroll(function() {
    if($(window).scrollTop() > 1000 && stateScrollLetter === true) {
        $('.mail-pic').addClass('mail-pic-animate');
        stateScrollLetter = false;
    }
});
$(window).scroll(function() {
    if($(window).scrollTop() > 600 && stateScrollFox === true) {
        $('.fox').addClass('fox-animate');
        stateScrollFox = false;
    }
});