<?php
namespace App\controllers;

use App\core\Controller;
use App\models\Index;

class IndexController extends Controller {

	public function __construct() {
		$this->folder_tpl = get_class();
	}

	public function indexAction() {
		$model = new Index();
		$this->render('index');
	}
}