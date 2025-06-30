<?php
/**
 * Plugin Name: Fixed Bottom Message
 * Description: Displays a fixed message at the bottom of the page
 * Version:     1.1.0  // Updated version
 * Author:      Your Name
 * License:     GPL-2.0+
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function fbm_display_message() {
    $message = "This is a fixed message";  // Updated message
    
    echo '
    <style>
        .fbm-container {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: #2271b1;
            color: #ffffff;
            padding: 12px 20px;
            text-align: center;
            font-size: 16px;
            z-index: 9999;
        }
    </style>
    <div class="fbm-container">' . esc_html($message) . '</div>
    ';
}
add_action('wp_footer', 'fbm_display_message');