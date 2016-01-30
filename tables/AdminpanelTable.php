<?php
namespace App\tables;
class AdminpanelTable extends \App\core\Model_DB {

	public $id;
	public $login;
	public $password;

	public function fieldsTable() {
		return array(
			"id" => "",
			"login" => "",
			"password" => ""
			);
	}
}