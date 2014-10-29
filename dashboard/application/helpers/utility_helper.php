<?php
/**
 * Created by PhpStorm.
 * User: LEEYOOL
 * Date: 10/20/14
 * Time: 2:38 PM
 */

function echo_asset_css() {
    $css = array(
        'css/normalize',
        'css/bootstrap',
        'css/font-awesome',
        'css/style'
    );
    foreach ($css as $item) {
        echo "<link rel='stylesheet' href='" . asset_url() . $item . ".css'/>";
    }
}

function echo_asset_js() {
    $js = array(
        'js/jquery',
        'js/bootstrap',
        'js/script'
    );
    foreach ($js as $item) {
        echo "<script src='" . asset_url() . $item . ".js'></script>";
    }
}

function echo_asset_url() {
    return base_url();
}
function asset_url() {
    return base_url() . 'assets/';
}