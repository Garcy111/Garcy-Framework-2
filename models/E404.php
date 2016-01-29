<?php
namespace App\models;
	
use App\core\Template;

class E404 extends Main {

	public function __construct() {
		parent::__construct();
		header("HTTP/1.0 404 Not Found");
	}

	public function render() {
		$smarty = new Template();
		$smarty->display('404.tpl');
	}
}