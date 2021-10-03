<?php

/**
 *
 * @link              https://readysteadywebsites.com
 * @since             1.0.0
 * @package           RSW_MP_Styling
 *
 * @wordpress-plugin
 * Plugin Name:       Extra Styling for MemberPress
 * Plugin URI:        https://readysteadywebsites.com/styling-memberpress/
 * Description:       Just a little plugin to make MemberPress registration and login pages look a little nice. Allows easy styling of buttons right from the customizer.
 * Version:           1.0.6
 * Author:            Ready Steady Websites
 * Author URI:        https://readysteadywebsites.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rswmpstyling
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('RSW_MP_STYLING_VERSION', '1.0.6');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rswmpstyling-activator.php
 */
function activate_RSW_MP_Styling()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-rswmpstyling-activator.php';
    RSW_MP_Styling_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rswmpstyling-deactivator.php
 */
function deactivate_RSW_MP_Styling()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-rswmpstyling-deactivator.php';
    RSW_MP_Styling_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_RSW_MP_Styling');
register_deactivation_hook(__FILE__, 'deactivate_RSW_MP_Styling');


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-rswmpstyling.php';

/**
 * Customizer Controls
 */
require plugin_dir_path(__FILE__) . 'customizer/rswmpstyling-customizer.php';
require plugin_dir_path(__FILE__) . 'customizer/rswmpstyling-customizer-css.php';

/*
 * Dismissable Notice for "Pro" release
*/
function rswmpstyling_admin_notice()
{
    $user_id = get_current_user_id();
    if (!get_user_meta($user_id, 'rswmpstyling_admin_notice_offer_05102021')) {
        echo '<div class="notice notice-info is-dismissible" style="background-color:#e5f5fa;border-top:1px solid #00a0d2;border-right:1px solid #00a0d2;border-bottom:1px solid #00a0d2;"><p><strong><span style="font-size:1.25rem">OFFER ENDING SOON!</span><br><br>Looking for LOADS MORE styling options, Course styling options plus even more?</strong><br><br>We now have a "Pro" version of our Extra Styling for MemberPress plugin called <strong>Missing Bits for MemberPress</strong>!<br><br><strong style="font-size:1rem">🛒 <a href="https://readysteadywebsites.com/rswmpmbits30off" target="_blank">Offer ending soon! Enter "3OFF" at the checkout to get 30% off for a limited time!</a></strong></p><p><a href="?rswmpstyling-offer">Dismiss</a></p></div>';
    }
}
add_action('admin_notices', 'rswmpstyling_admin_notice');

function rswmpstyling_admin_notice_offer_05102021()
{
    $user_id = get_current_user_id();
    if (isset($_GET['rswmpstyling-offer'])) {
        add_user_meta($user_id, 'rswmpstyling_admin_notice_offer_05102021', 'true', true);
    }
}
add_action('admin_init', 'rswmpstyling_admin_notice_offer_05102021');

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_RSW_MP_Styling()
{
    $plugin = new RSW_MP_Styling();
    $plugin->run();
}
run_RSW_MP_Styling();
