$(document).keydown(function(e) {
    if (e.keyCode == 72 && e.ctrlKey) {
        location.href = '?page=hm';
    } else if (e.keyCode == 65 && e.ctrlKey) {
        location.href = '?page=admin';
    }
});
