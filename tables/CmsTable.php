<?php
namespace App\tables;
class CmsTable extends \App\core\Model_DB {

	public $id;
	public $link_id;
	public $link;
	public $type;

	public function fieldsTable() {
		return array(
			"id" => "",
			"link_id" => "",
			"link" => "",
			"type" => ""
			);
	}
}