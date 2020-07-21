<?php
    error_reporting(0);
    show_source(__FILE__);
    session_save_path('session');
    ini_set('session.serialize_handler','php_serialize');
    session_start();
    $_SESSION['session'] = $_GET['session'];
    ?>