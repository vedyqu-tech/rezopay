<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$storagePath = sys_get_temp_dir() . '/laravel-storage';

$_ENV['LARAVEL_STORAGE_PATH'] = $storagePath;
$_SERVER['LARAVEL_STORAGE_PATH'] = $storagePath;

$directories = [
    'app',
    'app/public',
    'framework/cache/data',
    'framework/sessions',
    'framework/views',
    'logs',
];

foreach ($directories as $directory) {
    $path = $storagePath . '/' . $directory;

    if (!is_dir($path)) {
        @mkdir($path, 0775, true);
    }
}

require __DIR__ . '/../public/index.php';
