jQuery(document).ready(function($) {
    // Make the menu responsive
    $('#menu-main-navigation').slicknav({
        appendTo : '.site-header' /* Change the position of the navigation bar */
    });

    // Run the bxSlider library on testimonials
    $('.testimonials-list').bxSlider({
        controls: false,
        mode: 'fade',
        keyboardEnabled: true
    });
})