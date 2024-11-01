<?php

namespace CasualWP\Wipsum;

function admin_scripts_and_styles() {
    $js = WIPSUM_DIR_PATH . '/dist/admin.js';
    $css = WIPSUM_DIR_PATH . '/dist/admin.css';

    if(file_exists($js)) {
        wp_enqueue_script('wipsum-admin-js', WIPSUM_DIR_URL . '/dist/admin.js', [], filemtime($js), true);
    }

    if(file_exists($css)) {
        wp_enqueue_style('wipsum-admin-css', WIPSUM_DIR_URL . '/dist/admin.css', [], filemtime($css));
    }
}
