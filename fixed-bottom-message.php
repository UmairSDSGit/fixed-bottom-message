<?php
/**
 * Plugin Name: Fixed Bottom Message
 * Description: Displays a fixed message at the bottom of the page
 * Version: 1.1.0
 * Author: Your Name
 * License: GPL-2.0+
 * GitHub Plugin URI: https://github.com/UmairSDSGit/fixed-bottom-message
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

// Plugin update checker
require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$myUpdateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/UmairSDSGit/fixed-bottom-message',
    __FILE__,
    'fixed-bottom-message'
);

// Optional: Set branch for updates (default: master/main)
$myUpdateChecker->setBranch('main');

function fbm_display_message() {
    $message = "This is a fixed message";
    
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