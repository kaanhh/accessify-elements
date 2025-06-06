<?php
defined('ABSPATH') || exit;

function fabify_register_settings() {
    add_option('fabify_button_count', 3);

    register_setting('fabify_options_group', 'fabify_button_count');
}

add_action('admin_init', 'fabify_register_settings');

function fabify_register_menu_page() {
    add_menu_page(
        'Fabify Elements',
        'Fabify Elements',
        'manage_options',
        'fabify-elements',
        'fabify_settings_page_html',
        'dashicons-admin-generic',
        90
    );
}

add_action('admin_menu', 'fabify_register_menu_page');

function fabify_settings_page_html() {
    ?>
    <div class="wrap">
        <h1>Fabify Elements – Einstellungen</h1>
        <form method="post" action="options.php">
            <?php settings_fields('fabify_options_group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Anzahl der Buttons</th>
                    <td>
                        <input type="number" name="fabify_button_count" value="<?php echo esc_attr(get_option('fabify_button_count')); ?>" min="1" max="10" />
                    </td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
