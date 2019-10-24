<?php

/*
Plugin Name: Multi Tab
Plugin URI: http://logicr.eu/
Description: Creates a button in the WordPress admin that allows you to open multiple (check-marked) posts / pages / products(WooCommerce) at once.
Version: 1.0.4
Author: Eduard V. Doloc
Author URI: https://uprise.ro
Author Email: eduard@uprise.ro
*/

//hooking into wordpress admin
add_filter('views_edit-post', 'rwky_mt_connect');
add_filter('views_edit-page', 'rwky_mt_connect');
add_filter('views_edit-product', 'rwky_mt_connect', 100);

//button
function rwky_mt_connect($views)
{
    $views['import'] = '<input type="submit" name="filter_mt" id="mt-submit" class="button" value="Open Multiple">';

    return $views;
}

//js loader (admin only)
function mt_js_loader()
{
    wp_enqueue_script(
        'submitform',
        plugins_url() . '/multi-tab/js/mt.min.js',
        array('jquery')
    );
}

//enqueue the js as last
add_action('admin_enqueue_scripts', 'mt_js_loader', 999);