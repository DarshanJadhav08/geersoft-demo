<?php
/**
 * Local Development Router for PHP Built-in Server
 * Emulates Apache .htaccess RewriteRule ^(.*)$ $1.php
 * File: router.php
 */

$rawUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($rawUri);

// 1. If static file or direct file exists, let the PHP built-in server handle it directly
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// 1b. Aliases for common routes
if ($uri === '/services' || $uri === '/services/') {
    require __DIR__ . '/services_all.php';
    return true;
}

if ($uri === '/blog' || $uri === '/blog/') {
    require __DIR__ . '/blogs.php';
    return true;
}

// 1c. Individual service detail routes: /services/{slug} or /service/{slug}
if (preg_match('#^/services?/([^/]+)/?$#', $uri, $matches)) {
    if ($matches[1] !== 'all' && $matches[1] !== '_all') {
        $_GET['slug'] = $matches[1];
        require __DIR__ . '/service-detail.php';
        return true;
    }
}

// 2. If clean URL matches a .php file (e.g. /about -> about.php), require that file
if ($uri !== '/' && file_exists(__DIR__ . $uri . '.php')) {
    require __DIR__ . $uri . '.php';
    return true;
}

// 3. If it's a directory with an index.php
if (is_dir(__DIR__ . $uri) && file_exists(__DIR__ . $uri . '/index.php')) {
    require __DIR__ . $uri . '/index.php';
    return true;
}

// 4. Fallback to index.php
require __DIR__ . '/index.php';
