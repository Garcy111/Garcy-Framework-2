<?php
namespace App\controllers;

use App\core\Controller;
use App\models\Search;

class SearchController extends Controller {

	public function __construct() {
		$this->folder_tpl = get_class();
	}

	public function indexAction() {
		$request = $_SERVER["REQUEST_URI"];
		$query = explode("=", $request);
		$query = end($query);
		$query = urldecode($query);
		$query = strip_tags($query);
		$model = new Search($query);
		$dataSearch = $model->dataSearch;
		$this->render('search', array('search' => $dataSearch));
	}
}