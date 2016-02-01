<?php
namespace App\modules\adminpanel\models;

use \App\tables\CmsTable;
use \App\tables\Cms_staticTable;
use \App\core\E404Exception;

class Pages extends Main {

	public function __construct() {
		parent::__construct();
	}

	public static function addStaticPage($page_id, $link, $content) {
		$cms = new \App\tables\CmsTable();
		$cms->fetchOne();
		$cms->page_id = $page_id;
		$cms->link = $link;
		$cms->type = 'static';
		$cms->save();
		$cms_static = new \App\tables\Cms_staticTable();
		$cms_static->page_id = $page_id;
		$cms_static->content = $content;
		$cms_static->save();
	}

	public static function editStaticPage($page_id, $link, $content) {
		$page_id = intval($page_id);
		$select = array("where" => "`page_id` = $page_id");
		$tableCms = new \App\tables\CmsTable($select);
		$tableCms->fetchOne();
		$tableCms->link = $link;
		$tableCms->update();
		$tableCms_static = new Cms_staticTable($select);
		$tableCms_static->fetchOne();
		$tableCms_static->content= $content;
		$tableCms_static->update();
	}

	public static function delStaticPage($page_id) {
		$page_id = intval($page_id);
		$select = array("where" => "`page_id` = $page_id");
		$tableCms = new \App\tables\CmsTable($select);
		$tableCms->fetchOne();
		$tableCms->deleteRow();
		$tableCms_static = new Cms_staticTable($select);
		$tableCms_static->fetchOne();
		$tableCms_static->deleteRow();
	}

	public function getPages() {
		$select = array("where" => "`type` >= 'static'");
		$obj = new CmsTable($select);
		$data = $obj->getAllRows();
		if (empty($data)) return false;
		rsort($data);
		return $data;
	}

	public function getPage($edit) {
		$edit = intval($edit);
		$select = array("where" => "`page_id` = $edit");
		$table = new Cms_staticTable($select);
		$data = $table->getOneRow();
		if (empty($data)) throw new E404Exception();
		$table = new CmsTable($select);
		$link = $table->getOneRow();
		$data['link'] = $link['link'];
		return $data;
	}
}