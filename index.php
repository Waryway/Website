<?php

require_once  __DIR__ . DIRECTORY_SEPARATOR . 'vendor'. DIRECTORY_SEPARATOR . 'autoload.php';

/** @var $Session Session */
$Session = src\singleton\Session::inst();
$Session->Start();

?>