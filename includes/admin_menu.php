<?php
function admin_menu_register() {
    add_action( 'admin_menu','add_admin_pages');
}
function add_admin_pages() {
    add_menu_page( 'Xample Plugin', 'Xample', 'manage_options', PAGE_SLUG,  'admin_index', 'dashicons-store', 110 );
}
function admin_index() {
    require_once plugin_dir_path( dirname(__FILE__,1) ) . 'templates/admin.php';
}