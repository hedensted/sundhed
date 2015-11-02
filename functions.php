<?php

/* Clean up Wordpress header */
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_shortlink_wp_head');
remove_action('wp_head','wp_generator');

/* Use excerpt for meta description */
add_post_type_support('page','excerpt');

?>
