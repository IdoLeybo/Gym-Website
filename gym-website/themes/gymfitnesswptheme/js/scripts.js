jQuery(document).ready(function($) {
    // Make the menu responsive
    $('#menu-main-navigation').slicknav(
    //     {
    //     appendTo : '.site-header' /* Change the position of the navigation bar */
    // }
    );

    // Run the bxSlider library on testimonials
    $('.testimonials-list').bxSlider({
        controls: false,
        mode: 'fade',
        keyboardEnabled: true
    });

    //When the page is ready add the fixed menu if position is greater then 300px
    const headerScroll = document.querySelector('.navigation-bar');
    const rect = headerScroll.getBoundingClientRect();
    const topDistance = Math.abs(rect.top);
    fixedMenu(topDistance);
})

window.onscroll = () => {
    const scroll = window.scrollY;
    fixedMenu(scroll)
}

function fixedMenu(scroll) {
    const headerScroll = document.querySelector('.navigation-bar');

    if(scroll > 300) {
        headerScroll.classList.add('fixed-top');
    } else {
        headerScroll.classList.remove('fixed-top');
    }
}