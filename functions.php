<?php
add_action( 'after_setup_theme', function () {
    // Add support for block styles.
    add_theme_support('wp-block-styles');

    // Enqueue editor styles.
    add_editor_style('editor-style.css');
} );
