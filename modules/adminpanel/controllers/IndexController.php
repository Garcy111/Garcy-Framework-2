<?php
namespace App\modules\adminpanel\controllers;

use \App\modules\adminpanel\models\Login;
use \App\modules\adminpanel\models\Index;
use \App\modules\adminpanel\models\Settings;
use \App\modules\adminpanel\models\Blog;

class IndexController implements \App\core\IController {

	function indexAction() {
		if(isset($_SESSION['admin_page'])) {
			$obj = new Index();
			$obj->render();
		} else $this->renderLoginPage();
	}

	function blogAction() {
		if(isset($_SESSION['admin_page'])) {
			$obj = new Blog();
			$obj->render();
		} else $this->renderLoginPage();
	}

	function SettingsAction() {
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