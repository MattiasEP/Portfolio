$('.clickable').on('click', function() {
    $(this).children(":nth-child(2)").toggle('hidden');
    $(this).children(":nth-child(1)").children(":nth-child(1)").toggleClass('fa-chevron-down');
    $(this).children(":nth-child(1)").children(":nth-child(1)").toggleClass('fa-chevron-up');
});
