<?php
namespace App\modules\adminpanel\models;

use App\modules\adminpanel\core\Template;

class Settings extends Main {

	public function __construct() {
		parent::__construct();
	}

	public function render() {
		$smarty = new Template();
		$smarty->assign('action', $this->_action);
		$smarty->display('adminpanel.tpl');
	}
}