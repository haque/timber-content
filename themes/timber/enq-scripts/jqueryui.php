<?php
/**
Theme specific styles and scripts
	wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_style( $handle, $src, $deps, $ver );
*/ 
wp_enqueue_style('cbv-jquery-ui-css', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), array(0, 98));
wp_enqueue_script('cbv-jquery-ui-js', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), '1.2.1', true);

?>