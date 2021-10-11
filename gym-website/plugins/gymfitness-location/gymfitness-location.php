<?php
/*
    Plugin Name: Gym Fitness - Location With Google Maps
    Plugin URI:
    Description: Location of the Gym
    Version: 1.0
    Author: Ido Leybovitch
    Text Domain: gymfitness
*/

if(!defined('ABSPATH')) die();

function gymfitness_location_shortcode() {

    $location = get_field('location');?>

    <div class="location">
        <input type="hidden" id="lat" value="<?php echo $location['lat']; ?>" />
        <input type="hidden" id="lng" value="<?php echo $location['lng']; ?>" />
        <input type="hidden" id="address" value="<?php echo $location['address']; ?>" />

        <div id="map">

        </div>
    </div>

<?php
}

add_shortcode('gymfitness_location', 'gymfitness_location_shortcode');

// Add Leaflet Scripts
function gymfitness_location_scripts() {

    if(is_page('contact-us')):
    // leaflet css
    wp_enqueue_style('leafletcss', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), '1.5.1');

    //leaflet js
    wp_enqueue_script('leafletjs', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', array(), '1.5.1', true);

    //gymfitness leaflet
    wp_enqueue_script('gymfitness-leaflet', plugins_url('/js/gymfitness-leaflet.js' , __FILE__), array('leafletjs'), '1.0.0', true);

    endif;
}

add_action('wp_enqueue_scripts', 'gymfitness_location_scripts');

