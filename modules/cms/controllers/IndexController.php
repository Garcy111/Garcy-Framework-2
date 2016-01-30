<?php
namespace App\modules\cms\controllers;

use App\modules\cms\models\_Static;
use App\modules\cms\models\_Category;
use App\modules\cms\models\_Entry;

class IndexController implements \App\core\IController {
	public function indexAction() {
		$app = \App\core\FrontController::getInstance();
		$data = $app->getPage();
		$type = $data['type'];

		switch ($type) {
			case 'static':
				$model = new _Static();
				$model->render();
				break;

			case 'category':
				$model = new _Category();
				$model->render();
				break;

			case 'entry':
				$model = new _Entry();
				$model->render();
				break;
			
			default:
				# code...
				break;
		}
	}
}