<?php
namespace App\core;

class Controller implements \App\core\IController {

	public $path_tpl = '';
	public $folder_tpl = '';

	public function indexAction() {}

	public function render( $tpl, array $vars = array(),  $folder='' ) {
		if(empty($folder)) {
			$folder = $this->folder_tpl;
			if(!empty($folder)) {
				$folder = explode('\\', $folder);
				$folder = end($folder);
				$folder = str_replace('Controller', '', $folder);
				$folder = strtolower($folder);
			}
		}
		$smarty = new Template($this->path_tpl, $folder);
		foreach ($vars as $key => $value) {
			$smarty->assign($key, $value);
		}
		$smarty->display($tpl . '.tpl');
	}
}