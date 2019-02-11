$ = jQuery.noConflict();

$(document).ready(function(){

    //Mostrar y Ocultar menu
    $('div.menu-bar a.bt-menu').on('click', function() {
     $('nav.menu-sitio').toggle('slow');
    });
    
    //Reaccionar a Resize en la pantalla
    var breakpoint = 768;
    $(window).resize(function() {
    if ($(document).width() >= breakpoint) {
     $('nav.menu-sitio').show();
    }else{
     $('nav.menu-sitio').hide();
    }
    });
});