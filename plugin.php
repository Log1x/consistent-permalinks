<?php

/**
 * Plugin Name: Consistent Permalinks
 * Plugin URI:  https://github.com/log1x/consistent-permalinks
 * Description: Enforce consistency in permalink casing for incoming requests.
 * Version:     1.0.0
 * Author:      Brandon Nifong
 * Author URI:  https://github.com/log1x
 */
add_action('template_redirect', function () {
    if (defined('WP_CLI') && WP_CLI || is_admin() || is_404()) {
        return;
    }

    $canonical = redirect_canonical(null, false);

    $parsed = wp_parse_url($canonical ?? $_SERVER['REQUEST_URI'] ?? '/');

    $path = $parsed['path'] ?? '/';
    $query = $parsed['query'] ?? null;

    if (! preg_match('/[A-Z]/', $path)) {
        return;
    }

    $path = strtolower($path);
    $url = home_url($path);

    $redirect = ! empty($query)
        ? "{$url}?{$query}"
        : $url;

    if (wp_safe_redirect($redirect, 301)) {
        exit;
    }
}, 0);
