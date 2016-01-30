<?php
namespace App\modules\adminpanel\models;

use \App\modules\adminpanel\core\Template;
use \App\tables\Table_Cms;

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
		$select = array("where" => "`id` >= 1");
		$obj = new Table_Cms($select);
		$data = $obj->getAllRows();
		if (empty($data)) return false;
		rsort($data);
		return $data;
	}
}