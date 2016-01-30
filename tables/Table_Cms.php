<?php
namespace App\tables;
class Table_Cms extends \App\core\Model_DB {

	public $id;
	public $page;

	public function fieldsTable() {
		return array(
			"id" => "",
			"page" => ""
			);
	}
}