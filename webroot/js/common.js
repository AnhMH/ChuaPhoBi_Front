$(document).ready(function(e) {
    /*Scroll to Top*/
    $('.scrollTo').on('click', scrollToTop);
    
    menuMobile();
    
    socialShare();
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

function socialShare() {
    var post_title = $('meta[property="og:title"]').attr('content').replace("", "");
    var post_url = $('meta[property="og:url"]').attr('content').replace("", "");
    //facebook
    $('a.btn_facebook').click(function(e) {
        var url = 'https://www.facebook.com/sharer/sharer.php?u=' + urlEncode(post_url) + '&t=' + post_title;
        var newwindow = window.open(url, '_blank', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=450,width=710');
        if (window.focus) {
            newwindow.focus();
        }
        e.preventDefault();
    });
    //google+
    $('a.btn_google').click(function(e) {
        var url = 'https://plus.google.com/share?url=' + urlEncode(post_url);
        var newwindow = window.open(url, '_blank', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=450,width=520');
        if (window.focus) {
            newwindow.focus();
        }
        e.preventDefault();
    });
    //twitter
    $('a.btn_twitter').click(function(e) {
        var url = 'https://twitter.com/intent/tweet?source=webclient&text=' + post_title + '+' + urlEncode(post_url);
        var newwindow = window.open(url, '_blank', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=450,width=710');
        if (window.focus) {
            newwindow.focus();
        }
        e.preventDefault();
    });
}

function urlEncode(str){
    str = (str + '').toString();
    return encodeURIComponent(str).replace(/#!/g, '%23').replace(/!/g, '%21').replace(/'/g, '%27').replace(/\(/g, '%28').replace(/\)/g, '%29').replace(/\*/g, '%2A').replace(/%20/g, '+');
}
