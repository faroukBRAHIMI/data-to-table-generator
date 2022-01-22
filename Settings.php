<?php

/**
 * @note set project constants
 * 
 */
define('NALTIS_BASE_PATH', __DIR__ );

// if things break, atleast they will look good !
function Natlis_Bootstrap_Style_Err($errno, $errstr, $errfile, $errline) {
    echo "<div class='alert alert-danger' role='alert'><b>Error:</b> [$errno] [$errfile] Line [$errline] <br> $errstr <br></div>";
}

//set error handler
set_error_handler("Natlis_Bootstrap_Style_Err");

?>