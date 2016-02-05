<?php
namespace App\tables;
class Cms_staticTable extends \App\core\Model_DB {

	public $id;
	public $page_id;
	public $title;
	public $content;

	public function fieldsTable() {
		return array(
			"id" => "",
			"page_id" => "",
			"title" => "",
			"content" => ""
			);
	}
}