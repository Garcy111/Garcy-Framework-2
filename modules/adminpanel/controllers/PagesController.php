<?php
namespace App\modules\adminpanel\controllers;

use App\core\Controller;
use App\core\ImageManager;
use App\modules\adminpanel\models\Pages;

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

			// ImageManager
			$path = SITE_PATH."public/uploads/";
			$Image = new ImageManager($path);
			$imgs = $Image->getImages();

			$add = !empty($params['add'])?$params['add']:false;
			$edit = !empty($params['edit'])?$params['edit']:false;
			if($add == 'page') {
				$this->render('add', array(
					'controller' => $controller,
					'imgs' => $imgs
				));
			}
			if(!empty($edit)) {
				$data = $model->getPage($edit);
				$this->render('edit', array(
					'controller' => $controller,
					'page' => $data,
					'imgs' => $imgs
				));
			}
			if($add != 'page' && !$edit) {
				$pages = $model->getPages();
				$this->render('pages', array(
					'pages' => $pages,
					'controller' => $controller
				));
			}
		} else $this->render('login', array(), 'login');
	}
}