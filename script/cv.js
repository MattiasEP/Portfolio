$('.clickable').on('click', function() {
    $(this).children(":nth-child(2)").toggle('hidden');
    $(this).children(":nth-child(1)").children(":nth-child(1)").toggleClass('fa-chevron-down');
    $(this).children(":nth-child(1)").children(":nth-child(1)").toggleClass('fa-chevron-up');
});

$('.clickable-2').on('click', function() {
    $(this).next().toggle('hidden');
    $(this).children().children().toggleClass('fa-chevron-down');
    $(this).children().children().toggleClass('fa-chevron-up');
});
