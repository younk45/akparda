$(function() {

    if (parseInt($(window).width()) > 768){
        $('#slider').cycle({
            fx:'scrollUp',
            timeout:10000,
            speed:1500,
            next:'.next'
        });
    }

    $('.pause').click(function() {
        $(this).hide();
        $(this).parent().parent().find('.resume').show();
        $('#slider').cycle('pause');
    });
    $('.resume').click(function() {
        $(this).hide();
        $(this).parent().parent().find('.pause').show();
        $('#slider').cycle('resume');
    });
});