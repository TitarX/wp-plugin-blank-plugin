<?php

/**
 * Plugin Name: Blank Plugin
 * Plugin URI: https://workcode.ru/
 * Description: Blank Plugin for creating new Plugins
 * Version: 1.0.0
 * Author: Dmitriy Ignatenko
 * Author URI: https://workcode.ru/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.txt
 * Text Domain: blank-plugin
 */

function blank_plugin_wp_footer()
{
    print 'Проверка';
}

add_action('wp_footer', 'blank_plugin_wp_footer');
