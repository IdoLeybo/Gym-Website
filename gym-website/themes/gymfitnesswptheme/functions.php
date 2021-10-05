<?php 

function gymfitness_menus() {
    //wordpress function
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
    ));
}

// Hook
add_action('init','gymfitness_menus');