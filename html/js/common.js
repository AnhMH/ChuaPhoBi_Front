$(document).ready(function(e) {
    /*Scroll to Top*/
    $('.scrollTo').on('click', scrollToTop);
    
    menuMobile();
});

/*Scroll to Top*/
function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

/* Menu mobile */
function menuMobile() {
    $(".navbar-toggle").click(function(){
        $('body').addClass('mnopen');
    })
    $(".close-menu").click(function(){
        $('body').removeClass('mnopen');
    })
}
