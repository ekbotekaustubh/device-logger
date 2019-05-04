<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
define('APPLICATION_PATH', __DIR__);
define('APPLICATION_ENV', getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production');

require 'library/Bootstrap.php';
require 'library/Controller.php';
require 'library/Model.php';
require 'library/Config.php';
require 'library/View.php';
require 'library/Session.php';


$bootstrap = new Bootstrap();
