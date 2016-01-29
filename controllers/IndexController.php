<?php
namespace App\controllers;

use App\models\Index;

class IndexController implements \App\core\IController {
	public function indexAction() {
		$index = new Index();
		$index->render();
	}
}