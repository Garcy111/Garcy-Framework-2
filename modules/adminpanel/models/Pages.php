<?php
namespace App\modules\adminpanel\models;

use \App\tables\CmsTable;

class Pages extends Main {

	public function __construct() {
		parent::__construct();
	}

	public static function addStaticPage($link_id, $link, $content) {
		$cms = new \App\tables\CmsTable();
		$cms->fetchOne();
		$cms->link_id = $link_id;
		$cms->link = $link;
		$cms->type = 'static';
		$cms->save();
		$cms_static = new \App\tables\Cms_staticTable();
		$cms_static->link_id = $link_id;
		$cms_static->content = $content;
		$cms_static->save();
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