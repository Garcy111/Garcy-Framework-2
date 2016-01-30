<?php
namespace App\modules\adminpanel\models;
class Main {

	protected $_params;
	protected $_controller;
	protected $_action;

	public function __construct() {
		$fc = \App\core\FrontController::getInstance();
		$this->_params = $fc->getParams();
		$_controller = $fc->getController();
		$this->_controller = str_replace('Controller', '', $_controller);
		$_action = $fc->getAction();
		$this->_action = str_replace('Action', '', $_action);
	}
}