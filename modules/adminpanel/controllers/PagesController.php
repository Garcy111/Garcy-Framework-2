<?php
namespace App\modules\adminpanel\controllers;

use \App\core\Controller;
use \App\modules\adminpanel\models\Pages;

class PagesController extends Controller {

	public function __construct() {
		$this->path_tpl = 'modules/adminpanel/';
		$this->folder_tpl = get_class();
	}

	function indexAction() {
		if(isset($_SESSION['admin_page'])) {
			$model = new Pages();
			$controller = $model->_controller;
			$params = $model->_params;
			$add = !empty($params['add'])?$params['add']:false;
			$edit = !empty($params['edit'])?$params['edit']:false;
			if($add == 'page') {
				$this->render('add', array('controller' => $controller));
			}
			if(!empty($edit)) {
				$this->render('edit', array('controller' => $controller));
			}
			if(!$add && !$edit) {
				$pages = $model->getPages();
				$this->render('pages', array(
					'pages' => $pages,
					'controller' => $controller
				));
			}
		} else $this->render('login', array(), 'login');
	}
}