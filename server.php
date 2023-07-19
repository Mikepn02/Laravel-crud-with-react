<?php

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// If the requested URL matches a file in the 'public' directory, return it directly.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// Otherwise, include the 'index.php' file in the 'public' directory.
require_once __DIR__.'/public/index.php';
