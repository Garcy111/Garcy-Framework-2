<?php
namespace App\modules\adminpanel\controllers;

use \App\core\Controller;
use \App\modules\adminpanel\models\Index;

class IndexController extends Controller {

	public function __construct() {
		$this->path_tpl = 'modules/adminpanel/';
		$this->folder_tpl = get_class();
	}

	function indexAction() {
		if(isset($_SESSION['admin_page'])) {
			$model = new Index();
			$controller = $model->_controller;
			$this->render('index', array('controller' => $controller));
		} else $this->render('login', array(), 'login');
	}
}