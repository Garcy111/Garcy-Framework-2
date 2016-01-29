<?php
namespace App\modules\adminpanel\controllers;
class AjaxController implements \App\core\IController {
	
	function indexAction() {

		$flag = !empty($_POST['flag'])?$_POST['flag']:false;
		switch ($flag) {

		case 'saveArticle':
			$title = strip_tags($_POST["title"]);
			if (empty($title)) $title = "Без имени";
			$content = $_POST["content"];
			if (empty($content)) $content = "Без содержания";
			\App\modules\adminpanel\models\Blog::saveArticle($title, $content);
			header("Location: http://".$_SERVER['HTTP_HOST']
				.dirname($_SERVER['PHP_SELF'])
				."/"."adminpanel/index/blog");
			break;

		// Удалить изображение из менеджера
		case 'delImg':
			$img = $_POST["img"];
			$path = SITE_PATH."public/uploads/";
			$Image = new \App\core\ImageManager($path, $img);
			$Image->delImage();
		break;
		// Вход в Админ Панель
		case 'logInAdminPanel':
			$login = strip_tags($_POST['login']);
			$password = strip_tags($_POST['password']);
			$password = md5($password);
			$select = array("where" => "`id` = 1");
			$obj = new \App\tables\Table_Adminpanel($select);
			$dataSettings = $obj->getOneRow();
			if($login == $dataSettings["login"] and $password == $dataSettings["password"]) {$_SESSION['admin_page'] = true;}
				else {echo 'Не верное имя или пароль';}
			break;
		// Выход из Админ Панель
		case 'logOutAdminPanel':
			unset($_SESSION['admin_page']);
			break;
		case 'changeAuthData':
			$new_login = trim(strip_tags($_POST['new_login']));
			$old_pass = trim(strip_tags($_POST['old_pass']));
			$new_pass = trim(strip_tags($_POST['new_pass']));
			$re_pass = trim(strip_tags($_POST['re_pass']));
			$response = array();
			if (empty($new_login)) {
				$response["new_login"] = "error"; 
				$response["error"] = "error"; 
			}
			if (empty($old_pass)) {
				$response["old_pass"] = "error"; 
				$response["error"] = "error"; 
			}
			if (empty($new_pass)) {
				$response["new_pass"] = "error"; 
				$response["error"] = "error"; 
			}
			if (empty($re_pass)) {
				$response["re_pass"] = "error"; 
				$response["error"] = "error"; 
			}

			$select = array("where" => "`id` = 1");
			$obj = new \App\tables\Table_Adminpanel($select);
			$dataSettings = $obj->getOneRow();

			$old_pass = md5($old_pass);
			if ($old_pass != $dataSettings["password"]) {
				$response["old_pass"] = "error"; 
				$response["error"] = "error";
			}
			if ($new_pass != $re_pass) {
				$response["new_pass"] = "error";
				$response["re_pass"] = "error";
				$response["error"] = "error";
			}

			if (empty($response["error"])) {
				$obj->fetchOne();
				$obj->login = $new_login;
				$obj->password = md5($new_pass);
				$obj->update();
				$response["success"] = "success";
			}

			print json_encode($response);
			break;
		default:
			throw new \App\core\E404Exception('Not existing value POST parameter flag');
			break;
		}
	}
}