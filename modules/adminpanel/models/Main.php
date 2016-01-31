<?php
namespace App\modules\adminpanel\models;
class Main {

	public $_params;
	public $_controller;
	public $_action;

	public function __construct() {
		$app = \App\core\FrontController::getInstance();
		$this->_params = $app->getParams();
		$_controller = $app->getController();
		$this->_controller = str_replace('Controller', '', $_controller);
		$_action = $app->getAction();
		$this->_action = str_replace('Action', '', $_action);
	}
}