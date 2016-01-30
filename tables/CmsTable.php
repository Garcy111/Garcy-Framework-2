<?php
namespace App\tables;
class CmsTable extends \App\core\Model_DB {

	public $id;
	public $page;
	public $type;

	public function fieldsTable() {
		return array(
			"id" => "",
			"page" => "",
			"type" => ""
			);
	}
}