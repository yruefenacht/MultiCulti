function show_login_error()
{
    $('.login_error').slideDown();
    setTimeout(function(){
        $('.login_error').slideUp();
    }, 2000);
}