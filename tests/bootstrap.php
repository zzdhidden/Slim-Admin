<?php

/**
 *  http://www.phpunit.de/manual/current/en/phpunit-book.html
 *
 */

set_include_path(dirname(__FILE__) . '/../' . PATH_SEPARATOR . get_include_path());
require '../../vendor/autoload.php';
require_once 'Slim/Admin.php';
\Slim\Admin::registerAutoloader();

?>


