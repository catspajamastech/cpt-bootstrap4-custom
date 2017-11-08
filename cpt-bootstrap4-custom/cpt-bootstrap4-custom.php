<?php
/**
 * Plugin Name: CPT Bootstrap 4 (Custom)
 * Plugin URI: https://github.com/catspajamastech/cpt-bootstrap4-custom/
 * Description: A minimal bootstrap 4 plugin for Wordpress that loads from CDN. Forget that silly business of editing functions.php.
 * Version: 4.0.0-beta2
 * Author: Cat's Pajamas Technology
 * Author URI: https://catspajamas.tech/
 * License: MIT
 */
if(!defined('ABSPATH')){exit;}//Exit if accessed directly
function load_bootstrap4() {

    $popper_js_url  =   'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js';
    $bs_js_url      =   'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js';
    $bs_cs_url      =   'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css';

    // register scripts and styles from CDN
    wp_register_script('popper',$popper_js_url,'jquery','1.12.3','');
    wp_register_script('bootstrap4',$bs_js_url,array('jquery', 'popper'),'','');
    wp_register_style ('bootstrap',$bs_cs_url,'bootstrap4','','');
    // enqueue scripts and styles
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap4');
    wp_enqueue_style('bootstrap');
};
add_action('wp_enqueue_scripts', 'load_bootstrap4');
