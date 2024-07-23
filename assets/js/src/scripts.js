$(document).ready(function() {
    $('.burger').click(function(e) {
        $('.burger, .m-header__mobile').toggleClass('active');
    });
    
    $('#openmodal').click(function(e) {
        $('.modal').toggleClass('active');
    });
    $('#modalclose').click(function(e) {
        $('.modal').toggleClass('active');
    });
    $('.modal__back').click(function(e) {
        $('.modal').toggleClass('active');
    });
    $(document).keydown(function(e) {
        if (e.key === "Escape") {
            $('.modal').removeClass('active');
        }
    });
});