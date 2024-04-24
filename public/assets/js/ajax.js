$(document).ready(function(){
    $('#regen-captcha').on('click', function(e){
        e.preventDefault();
        var captcha = $('#cap');
        $.ajax({
            type: "GET",
            url: '/ajax_regen_captcha',
        }).done(function( msg ) {
            captcha.attr('src', msg);
        });
    });
});
