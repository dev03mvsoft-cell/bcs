<?php
/**
 * ============================================================
 *  BCS - Helper Functions & Core Utilities
 * ============================================================
 */

// 1. Asset Versioning (Cache Clearing)
// Increment this version number whenever you deploy changes to CSS or JS files.
define('ASSET_VERSION', '1.0.1');

/**
 * Appends a version query string to the asset URL for cache busting.
 * 
 * @param string $path The relative path to the asset.
 * @return string The asset URL with versioning.
 */
function asset($path) {
    $clean_path = ltrim($path, '/');
    // Get the absolute path to the file for filemtime
    $full_path = dirname(__DIR__) . '/' . $clean_path;
    
    $version = ASSET_VERSION; // Fallback
    if (file_exists($full_path)) {
        $version = filemtime($full_path);
    }
    
    return BASE_URL . $clean_path . '?v=' . $version;
}

/**
 * Redirects to a relative route.
 * 
 * @param string $route The route to redirect to.
 */
function redirect($route) {
    header("Location: " . BASE_URL . ltrim($route, '/'));
    exit;
}
