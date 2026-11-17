<?php

if (isset($_SERVER['HTTP_X_VERCEL_DEPLOYMENT_URL']) || isset($_SERVER['VERCEL'])) {
    $_SERVER['SCRIPT_NAME'] = '/index.php';
    $_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';
}

require __DIR__ . '/../public/index.php';
