<?php
/*
 * Plugin Name: Test Gutenberg Block
 * Description:
 * Plugin URI: http://miniman-webdesign.co.uk
 * Version: 1.0
 * Author: Mike @ Miniman
 * Author URI: http://miniman-webdesign.co.uk
 * License: Private
*/

add_action('enqueue_block_editor_assets', 'test_block_editor_assets', 10, 1 );
add_action('enqueue_block_assets', 'test_block_assets', 10, 1 );

function test_block_editor_assets(){
    // Scripts.
    wp_enqueue_script(
        'test-block-editor-js', // Handle.
        plugins_url('/test-block/test-block.js', dirname(__FILE__)),
        array('wp-blocks', 'wp-i18n', 'wp-element')
    );

    // Styles.
    wp_enqueue_style(
        'test-block-editor-css', // Handle.
        plugins_url('/test-block/editor.css', dirname(__FILE__)),
        array('wp-edit-blocks')
    );
}

function test_block_assets(){

    // Styles.
    wp_enqueue_style(
        'test-block-css', // Handle.
        plugins_url('/test-block/styles.css', dirname(__FILE__)),
        array('wp-blocks')
    );
}

?>
