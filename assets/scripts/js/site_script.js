//Start your javascript journey here

//Mobile menu
var toggleMobileMenu = document.getElementById('toggle_mobile_menu');
var mainNav = document.getElementById('main_nav');
var siteHeader = document.getElementById('site_header');
toggleMobileMenu.addEventListener("click", function () {
    mainNav.classList.toggle('is_open');
    siteHeader.classList.toggle('mobile_menu_open');
}, false);

// Add smooth scroll to all anchor elements referencing an #id
document.querySelectorAll('a[href^="#"]')
    .forEach(trigger => {
        trigger.onclick = function(e) {
            e.preventDefault();
            let hash = this.getAttribute('href');
            let target = document.querySelector(hash);
            let headerOffset = 100;
            let elementPosition = target.offsetTop;
            let offsetPosition = elementPosition - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });
        };
    })
;