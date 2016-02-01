<?php
namespace App\tables;
class CmsTable extends \App\core\Model_DB {

	public $id;
	public $page_id;
	public $link;
	public $type;

	public function fieldsTable() {
		return array(
			"id" => "",
			"page_id" => "",
			"link" => "",
			"type" => ""
			);
	}
}