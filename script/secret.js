$(document).keydown(function(e) {
    if (e.keyCode == 49 && e.ctrlKey) {
        location.href = '?page=hm';
    } else if (e.keyCode == 48 && e.ctrlKey) {
        location.href = '?page=admin';
    }
});

setTimeout(function() {    
    $('.cv-heading, .content-box-1').hide().each(function(i) {
        var $el = $(this);
        setTimeout(function() {
            $el.slideDown(300);
            }, 100 * i);
        });
    }, 200);

$('.open').hover(function() {
    $(this).toggleClass('fa-envelope');
    $(this).toggleClass('fa-envelope-open');
})
