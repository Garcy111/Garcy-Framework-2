<?php
namespace App;

session_start();

error_reporting(E_ALL);

require('config.php');
require(SITE_PATH . 'vendor' . DS . 'autoload.php');
require(SITE_PATH . 'core' . DS . 'Connecting_DB.php');

try{
// Запускаем маршрутизатор
$frontObj = \App\core\FrontController::getInstance();
	$frontObj->route();
// Отображаем страничку 404
}catch (\App\core\E404Exception $e){
	// echo $e->getMessage();
	$rc = new \ReflectionClass('\App\controllers\E404Controller');
	$controller = $rc->newInstance();
	$method = $rc->getMethod('indexAction');
	$method->invoke($controller);
}