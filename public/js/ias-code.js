$(document).foundation();

// auto active menu
var url = window.location.href;
$('.top-bar#main-menu a[href="'+ url +'"]').parent().addClass('active');

if (url == "http://127.0.0.1:8000/") {
    $('.top-bar#main-menu a[href="/"]').parent().addClass('active');
}

// voyager menu
// $('ul.dropdown').parent().addClass('has-dropdown');
