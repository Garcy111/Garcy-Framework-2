<?php
namespace App\controllers;
use App\core\Controller;

class AjaxController extends Controller {

	function indexAction() {

		$flag = !empty($_POST['flag'])?$_POST['flag']:false;
		switch ($flag) {

		case 'value':
			// Тут что то делаем
			break;
		default:
			throw new \App\core\E404Exception('Not existing value POST parameter flag');
			break;
		}
	}
}