<?php

add_filter('body_class', 'rswmpstyling_class_names_conditional_css');
function rswmpstyling_class_names_conditional_css($classes)
{
    // Set up body class variable
  $rswmpstyling_body_class = "rsw-memberpress-styling";
  // add correct class name into the $classes array
    $classes[] = $rswmpstyling_body_class;
    // return the $classes array
    return $classes;
}

function rswmpstyling_conditional_css()
{
    $rswmpstyling_version = '1.0.0';
    wp_enqueue_style('rsw-public', plugin_dir_url(__FILE__) . 'css/rswmpstyling-public.css', array(), $rswmpstyling_version, 'screen');
}
add_action('wp_enqueue_scripts', 'rswmpstyling_conditional_css', 9999);
