<?php
namespace App\modules\adminpanel\models;

use App\modules\adminpanel\core\Template;

class Login {

	public function render() {
		$smarty = new Template();
		$smarty->display('login.tpl');
	}
}