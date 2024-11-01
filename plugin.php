<?php

/**
 * Plugin Name: Wipsum
 * Description: Generate dummy text quickly with only one click.
 * Version: 1.0.0
 * Author: CasualWP
 * Author URI: https://github.com/CasualWP
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace CasualWP\Wipsum;

define('WIPSUM_DIR_PATH', plugin_dir_path( __FILE__ ));
define('WIPSUM_DIR_URL', plugin_dir_url( __FILE__ ));

include_once WIPSUM_DIR_PATH . '/inc/assets.php';
add_action('admin_enqueue_scripts', __NAMESPACE__ . '\\admin_scripts_and_styles');

include_once WIPSUM_DIR_PATH . '/inc/admin-bar.php';
add_action('admin_bar_menu', __NAMESPACE__ . '\\add_admin_bar_menu', 999);
 