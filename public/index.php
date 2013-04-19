<?php
define('DS', DIRECTORY_SEPARATOR);
define('BASE', __DIR__ );

require  __DIR__ . DS. 'lib' . DS . 'app' . DS . 'sequoia.php';
$app = new Sequoia();
$app->init();
