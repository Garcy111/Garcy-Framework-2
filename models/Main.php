<?php
namespace App\models;

class Main {

	protected $_params;

	public function __construct() {
		$rc = \App\core\FrontController::getInstance();
		$this->_params = $rc->getParams();
	}
}