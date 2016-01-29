<?php
namespace App\tables;
class Table_Adminpanel extends \App\core\Model_DB {

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