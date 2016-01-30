<?php
namespace App\modules\adminpanel\controllers;

use \App\modules\adminpanel\models\Login;
use \App\modules\adminpanel\models\Blog;

class BlogController implements \App\core\IController {

	function indexAction() {
		if(isset($_SESSION['admin_page'])) {
			$obj = new Blog();
			$obj->render();
		} else $this->renderLoginPage();
	}

	function renderLoginPage() {
		$obj = new Login();
		$obj->render();
	}
}