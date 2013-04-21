<?php
define('DS', DIRECTORY_SEPARATOR);
define('BASE', '..' );
define('APP',  BASE . DS . 'app');
define('LIB', BASE . DS  . 'lib');


require BASE . DS . 'config.php';
require LIB . DS . 'core' . DS . 'app' . DS . 'sequoia.php';


$config = new SConfig();
$sequoia = new Sequoia($config);

$sequoia->init();


