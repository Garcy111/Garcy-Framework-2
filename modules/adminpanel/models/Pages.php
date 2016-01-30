<?php
namespace App\modules\adminpanel\models;

use \App\modules\adminpanel\core\Template;
use \App\tables\CmsTable;

class Pages extends Main {

	public function __construct() {
		parent::__construct();
	}

	public function render() {
		$smarty = new Template();
		$smarty->assign('controller', $this->_controller);
		$smarty->assign('pages', $this->getPages());
		$smarty->display('adminpanel.tpl');
	}

	public function getPages() {
		$select = array("where" => "`type` >= 'static'");
		$obj = new CmsTable($select);
		$data = $obj->getAllRows();
		if (empty($data)) return false;
		rsort($data);
		return $data;
	}
}