<?php
namespace App\modules\adminpanel\controllers;

use \App\core\Controller;
use \App\modules\adminpanel\models\Blog;

class BlogController extends Controller {

	public function __construct() {
		$this->path_tpl = 'modules/adminpanel/';
		$this->folder_tpl = get_class();
	}

	function indexAction() {
		if(isset($_SESSION['admin_page'])) {
			$model = new Blog();
			$controller = $model->_controller;
			$imgs = $model->imgs;
			$this->render('blog', array(
				'controller' => $controller,
				'imgs' => $imgs
			));
		} else $this->render('login', array(), 'login');
	}
}