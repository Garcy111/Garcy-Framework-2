<?php
namespace App\controllers;
class UploadController implements \App\core\IController {

	// Upload resize img
	public function indexAction() {

		if(!empty($_FILES['uploadimg'])) {
			$image = new \App\core\SimpleImage();
			$uploaddir = SITE_PATH.'/public/uploads/';
			$uploaddirResize = SITE_PATH.'/public/uploads/min/'; 
			$image->load($_FILES['uploadimg']['tmp_name']);
			$image->resize(100, 100);
			$image->save($uploaddirResize . $_FILES['uploadimg']['name']);
			move_uploaded_file($_FILES['uploadimg']['tmp_name'], $uploaddir . $_FILES['uploadimg']['name']);
			echo "success";
		}
		else echo "error";
	}
}