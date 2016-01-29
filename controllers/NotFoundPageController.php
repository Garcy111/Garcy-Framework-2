<?php
namespace App\controllers;
	class NotFoundPageController implements \App\core\IController {
		public function indexAction() {
			$notFoundPage = new \App\models\NotFoundPage();
			$notFoundPage->render();
		}
	}