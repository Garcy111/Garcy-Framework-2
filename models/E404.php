<?php
namespace App\models;

class E404 extends Main {

	public function __construct() {
		parent::__construct();
		header("HTTP/1.0 404 Not Found");
	}
}