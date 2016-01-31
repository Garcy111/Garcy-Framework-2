<?php
namespace App\modules\cms\controllers;

use App\core\Controller;
use App\modules\cms\models\_Static;
use App\modules\cms\models\_Category;
use App\modules\cms\models\_Entry;

class IndexController extends Controller {

	public function __construct() {
		$this->path_tpl = 'modules/cms/';
		$this->folder_tpl = get_class();
	}

	public function indexAction() {
		$app = \App\core\FrontController::getInstance();
		$data = $app->getPage();
		$type = $data['type'];

		switch ($type) {
			case 'static':
				$this->render('static');
				break;

			case 'category':
				$this->render('category');
				break;

			case 'entry':
				$this->render('entry');
				break;
			
			default:
				# code...
				break;
		}
	}
}