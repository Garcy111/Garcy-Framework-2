<?php
namespace App\modules\adminpanel\models;
class Main {

	protected $_params;
	protected $_action;

	public function __construct() {
		$fc = \App\core\FrontController::getInstance();
		$this->_params = $fc->getParams();
		$this->_action = $fc->getAction();
	}
}