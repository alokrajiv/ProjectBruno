<<<<<<< HEAD
<?php

require_once __DIR__.'/config.php';

function logger($newLog){   
    $newLog = PHP_EOL . time() . " : " . $newLog;
    return file_put_contents(ERROR_LOG_DIR.'error.log', $newLog, FILE_APPEND | LOCK_EX);
=======
<?php

require_once __DIR__.'/config.php';

function logger($newLog){   
    $newLog = PHP_EOL . time() . " : " . $newLog;
    return file_put_contents(ERROR_LOG_DIR.'error.log', $newLog, FILE_APPEND | LOCK_EX);
>>>>>>> master
}