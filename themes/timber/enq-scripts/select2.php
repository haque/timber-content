<?php
wp_enqueue_style('select2-css', get_template_directory_uri() . '/assets/select2/select2.min.css', array(), null);
wp_enqueue_script('select2-js', get_template_directory_uri() . '/assets/select2/select2.min.js', array('jquery'), '1.8.0', true);