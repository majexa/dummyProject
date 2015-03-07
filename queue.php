#! /usr/bin/php
<?php

// queue manager //

define('NGN_PATH', '/home/user/ngn-env/ngn');
define('PROJECT_PATH', __DIR__.'/site');

define('WEBROOT_PATH', __DIR__);
require_once NGN_PATH.'/init/site-cli.php';
if (file_exists(PROJECT_PATH.'/init.php')) require PROJECT_PATH.'/init.php';

(new ProjectQueueWorker(isset($_SERVER['argv'][1]) ? $_SERVER['argv'][1] : 1))->run();
