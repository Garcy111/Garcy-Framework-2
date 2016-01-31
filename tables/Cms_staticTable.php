<?php
namespace App\tables;
class Cms_staticTable extends \App\core\Model_DB {

	public $id;
	public $link_id;
	public $content;

	public function fieldsTable() {
		return array(
			"id" => "",
			"link_id" => "",
			"content" => ""
			);
	}
}