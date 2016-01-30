<?php
namespace App\modules\adminpanel\controllers;

use \App\modules\adminpanel\models\Login;
use \App\modules\adminpanel\models\Settings;

class SettingsController implements \App\core\IController {

	function indexAction() {
		if(isset($_SESSION['admin_page'])) {
			$obj = new Settings();
			$obj->render();
		} else $this->renderLoginPage();
	}

	function renderLoginPage() {
		$obj = new Login();
		$obj->render();
	}
}