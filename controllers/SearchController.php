<?php
namespace App\controllers;

use App\models\Search;

class SearchController implements \App\core\IController {

	public function indexAction() {
		$request = $_SERVER["REQUEST_URI"];
		$query = explode("=", $request);
		$query = end($query);
		$query = urldecode($query);
		$query = strip_tags($query);
		$index = new Search($query);
		$index->render();
	}
}