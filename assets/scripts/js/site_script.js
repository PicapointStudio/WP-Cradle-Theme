//Start your javascript journey here

//Mobile menu
var toggleMobileMenu = document.getElementById('toggle_mobile_menu');
var mainNav = document.getElementById('main_nav');
var siteHeader = document.getElementById('site_header');
toggleMobileMenu.addEventListener("click", function () {
    mainNav.classList.toggle('is_open');
    siteHeader.classList.toggle('mobile_menu_open');
}, false);