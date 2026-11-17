<?php

if (isset($_GET['__vercel_path'])) {
    $path = $_GET['__vercel_path'];
    unset($_GET['__vercel_path']);
    
    $query = http_build_query($_GET);
    $_SERVER['REQUEST_URI'] = $path . ($query ? '?' . $query : '');
    $_SERVER['SCRIPT_NAME'] = '/index.php';
    $_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';
}

require __DIR__ . '/../public/index.php';
