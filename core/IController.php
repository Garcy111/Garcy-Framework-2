<?php
namespace App\core;
	interface IController {
		public function indexAction();
		public function render($tpl, array $vars);
	}
?>