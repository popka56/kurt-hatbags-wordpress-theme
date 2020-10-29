<?php
    remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-header', array(
        'video' => true,
    ) );
