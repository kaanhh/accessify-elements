<?php
/**
 * Plugin Name:       Fabify Elements
 * Plugin URI:        https://webstube24.de
 * Description:       Fügt moderne Floating Action Buttons (FABs) mit Icons und Sticky-Funktion hinzu.
 * Version:           1.0.0
 * Author:            Kaan Ertugrul
 * Author URI:        https://deine-seite.de
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fabify-elements
 * Domain Path:       /languages
 */

  require_once plugin_dir_path(__FILE__) . 'includes/settings.php';

defined('ABSPATH') || exit;

function fabify_elements_enqueue_assets() {
    $plugin_url = plugin_dir_url(__FILE__);

    wp_enqueue_style(
        'fabify-elements-style',
        $plugin_url . 'assets/css/fabify-elements.css',
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'fabify-elements-script',
        $plugin_url . 'assets/js/fabify-elements.js',
        ['jquery'],
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'fabify_elements_enqueue_assets');
