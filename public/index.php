<?php
namespace CAFETERIA;
use CAFETERIA\LIB\DATABASE\DatabaseHandler;
use CAFETERIA\LIB\DATABASE\PDODatabaseHandler;
use CAFETERIA\LIB\FrontController;

use CAFETERIA\MODELS\Test;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!defined('DS'))
{
    define('DS',DIRECTORY_SEPARATOR);
}

require_once '..'.DS.'app'.DS.'config.php';
require_once APP_PATH.DS.'lib'.DS.'autoload.php';
$frontController=new FrontController();
$frontController->dispatch();





//$test=new Test();
//$test->name='ahmed';
//$test->save();

//$test=Test::getByKey(3);
//$test->name='ahmed';
//$test->save();
//var_dump($test);
//exit();
//$test=Test::getAll();
//var_dump($test);