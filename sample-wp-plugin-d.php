<?php

/**
* @package wp plugin basic
* Plugin Name: sample-wp-plugin-d
* Description: Ejemplo para mostrar el admin menu. usando programacion funcional.
*/

/*

MIT License

Copyright (c) 2021 Ricardo Torrellas <ricardo.torrejas@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
defined('ABSPATH') or die('Hey, you can\t access this file, you silly human!');

if ( ! function_exists('add_action')) {
    echo 'Hey, you can\t access this file, you silly human!';
    die;
}
define("PAGE_SLUG",'xample_plugin');
$admin_menu = plugin_dir_path(__FILE__) . 'includes/admin_menu.php';
require_once $admin_menu;

function plugin_basic_activate_plugin() {
    flush_rewrite_rules();
}

function plugin_basic_deactivate_plugin() {
    flush_rewrite_rules();
}

function plugin_basic_uninstall_plugin() {

}

function register( ) {
    admin_menu_register();
}
register();
register_activation_hook(__FILE__,'plugin_basic_activate_plugin');
register_deactivation_hook(__FILE__,'plugin_basic_deactivate_plugin');
register_uninstall_hook(__FILE__, 'plugin_basic_uninstall_plugin');