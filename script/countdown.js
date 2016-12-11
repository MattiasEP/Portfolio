$('#countdown-lia').countdown('2018/01/15', function(event) {
    $(this).html(event.strftime('%w veckor, %d dagar och %H timmar'));
});

$('#countdown-exam').countdown('2018/05/31', function(event) {
    $(this).html(event.strftime('%w veckor, %d dagar och %H timmar'));
});

/*  Denna kod anropar funktioner som finns i filen jquery.countdown.min.js
    Jag har hittat den på nätet och använder den till min nedräkning på index.html
 */
