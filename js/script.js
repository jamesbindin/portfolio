// for navbar controls
var icon = $('.js--nav-icon');
var navmenu = $('.js--nav-menu');

$(document).ready(function(){

    // toggles nav menu when menu button is pressed
    $('.js--nav-icon').click(function(){
        toggle_nav()
    })
    // closes nav menu when nav option is selected 
    $('.js--nav_item').click(function(){
        toggle_nav()
    })

    // image popups 
    $('.js--image-popup').magnificPopup({
        type:'image',
        closeOnContentClick: true,
    });

    // header animation
    $('#header').particleground({
        dotColor: '#f7258533',
        lineColor: '#fefefe22',
        maxSpeedX: 0.01,
        maxSpeedY: 0.01,
        parallaxMultiplier: 20,
    });

    // wake up heroku apps, please note: cors is not enabled, it just prevents long loading times.
    $.get("https://jamesbindinfyp.herokuapp.com", function(data, status){
    });

    $.get("https://apifyp.herokuapp.com/").done(function (data) {
    });

    $.get("https://jamesbindindrawshare.herokuapp.com/", function(data, status){
    });


})

// toggles nav menu being shown or not
function toggle_nav(){
    navmenu.slideToggle(200);
    if(icon.attr('name') == "menu-outline"){
        icon.attr('name', 'close-outline');
    } else {
        icon.attr('name', 'menu-outline');
    }
}