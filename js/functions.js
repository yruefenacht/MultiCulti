function show_login_error()
{
    $('.login_error').slideDown();
    setTimeout(function(){
        $('.login_error').slideUp();
    }, 2000);
}

$(document).ready(function(){
    
    
    $('#mp1').addClass('active_point');
    
    $('.mp_icon').click(function(){
               
        $('.mp_icon').removeClass('active_point');
        $(this).addClass('active_point');
        
        $('.userContent').hide();
        
        var $id = $(this).attr('value');
        
        
        switch($id)
        {
            case '1':
                $('#uc1').show();
                break;
            case '2':
                $('#uc2').show();
                break;
            case '3':
                $('#uc3').show();
                break;
        }
        
        
        
    });
    
    
    //handle GUI Pages
    
});