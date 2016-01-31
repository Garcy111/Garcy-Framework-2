<?php
namespace App\controllers;

use App\core\Controller;
use App\models\E404;

class E404Controller extends Controller {

	public function __construct() {
		$this->folder_tpl = get_class();
	}

	public function indexAction() {
		$model = new E404();
		$this->render('404');
	}

}