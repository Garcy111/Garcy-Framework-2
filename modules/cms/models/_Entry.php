<?php
namespace App\modules\cms\models;

use App\modules\cms\core\Template;

class _Entry {

	public function __construct() {}

	public function render() {
		$smarty = new Template();
		$smarty->display('entry.tpl');
	}
}