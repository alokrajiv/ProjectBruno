<?php

// Make sure errors are displayed. Change this when the site is public.
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 1);

$files_to_load = [ 'config.php', 'db-conn.php', 'logger.php' ];

foreach ($files_to_load as $file_path) {
    require_once __DIR__.'/'.$file_path;
}

