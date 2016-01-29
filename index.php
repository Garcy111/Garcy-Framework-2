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
}catch (\App\core\NotFoundPageException $e){
	// echo $e->getMessage(); // Для отладки
	$rc = new \ReflectionClass('\App\controllers\NotFoundPageController');
	$controller = $rc->newInstance();
	$method = $rc->getMethod('indexAction');
	$method->invoke($controller);
}