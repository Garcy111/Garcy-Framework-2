<?php
namespace App\controllers;
	class E404Controller implements \App\core\IController {
		public function indexAction() {
			$notFoundPage = new \App\models\E404();
			$notFoundPage->render();
		}
	}