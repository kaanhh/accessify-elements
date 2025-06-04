<?php
/**
 * Plugin Name:       Accessify Elements
 * Plugin URI:        https://webstube24.de
 * Description:       Fügt barrierefreie, sticky UI-Elemente mit Icons und modernen Optionen hinzu.
 * Version:           1.0.0
 * Author:            Kaan Ertugrul
 * Author URI:        https://deine-seite.de
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       accessify-elements
 * Domain Path:       /languages
 */

 defined('ABSPATH') || exit;

function accessify_elements_enqueue_assets() {

   $plugin_url = plugin_dir_url(__FILE__);

   wp_enqueue_style(
    'accessify-elements-style',                      
    $plugin_url . 'assets/css/accessify-elements.css', 
    array(),                                         
    '1.0.0'                                          
);

    wp_enqueue_script(
        'accessify-elements-script',                     
        $plugin_url . 'assets/js/accessify-elements.js',  
        array('jquery'),                                  
        '1.0.0',                                           
        true                                               
    );
}
