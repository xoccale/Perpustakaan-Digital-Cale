<?php

/**
 * Pintu masuk aplikasi untuk Vercel.
 * Vercel mewajibkan fungsi serverless PHP berada di folder /api.
 * Kita tidak menulis ulang logika Laravel di sini — cukup arahkan
 * ke public/index.php, pintu masuk asli Laravel yang sudah ada.
 */
require __DIR__.'/../public/index.php';