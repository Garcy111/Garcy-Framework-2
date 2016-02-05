<?php
namespace App\modules\cms\controllers;

use App\core\Controller;
use App\modules\cms\models\_Static;
use App\modules\cms\models\_Category;
use App\modules\cms\models\_Entry;

use App\tables\CmsTable;
use App\tables\Cms_staticTable;

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
				$page_id = $data['page_id'];
				$page_id = intval($page_id);
				$select = array("where" => "`page_id` = $page_id");
				$table = new Cms_staticTable($select);
				$page = $table->getOneRow();
				$this->render('static', array('page' => $page));
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