<?php
/*
Plugin Name: Fixed Bottom Message
Description: Displays a fixed message at the bottom of the page
Version: 1.0
Author: Your Name
*/

function fbm_show_message() {
    $message = "This is a fixed message at the bottom";
    
    echo '
    <style>
        .fbm-message {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #333;
            color: white;
            padding: 10px;
            text-align: center;
            z-index: 9999;
        }
    </style>
    <div class="fbm-message">'.esc_html($message).'</div>
    ';
}
add_action('wp_footer', 'fbm_show_message');