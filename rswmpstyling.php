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
 * Version:           1.0.3
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
define('RSW_MP_STYLING_VERSION', '1.0.3');

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
