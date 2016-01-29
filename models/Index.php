<?php
namespace App\models;

use App\core\Template;

class Index extends Main {

	public function __construct() {
		parent::__construct();
	}

	public function render() {
		$smarty = new Template();
		// $smarty->assign('primer', $this->primer());
		$smarty->display('index.tpl');
	}
}