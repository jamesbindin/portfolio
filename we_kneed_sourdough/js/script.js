$(document).ready(function(){
    var icon = $('.js--nav-icon');
    var nav = $('.js--nav-menu');
    
    // mobile nav
    $('.js--nav-icon').click(function(){
        nav.slideToggle(200);
        if(icon.attr('name') == "menu-outline"){
            icon.attr('name', 'close-outline');
        } else {
            icon.attr('name', 'menu-outline');
        }
    })

    $('.js--show_more_btn').click(function(){
       $('html, body').animate({scrollTop: $('#features').offset().top - 85 }, 'slow');
    })
})