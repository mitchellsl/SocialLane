<?php
function fontawesome_dashboard() {
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', '', '5.8.1', 'all');
 }
 
 add_action('admin_init', 'fontawesome_dashboard');
?>