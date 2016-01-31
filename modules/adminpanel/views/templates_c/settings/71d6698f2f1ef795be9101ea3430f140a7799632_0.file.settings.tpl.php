<?php /* Smarty version 3.1.27, created on 2016-02-01 01:50:15
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\settings\settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3249656ae8fa75bd8c6_98187258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71d6698f2f1ef795be9101ea3430f140a7799632' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\settings\\settings.tpl',
      1 => 1454280615,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3249656ae8fa75bd8c6_98187258',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ae8fa77422c4_91480603',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ae8fa77422c4_91480603')) {
function content_56ae8fa77422c4_91480603 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3249656ae8fa75bd8c6_98187258';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
	<?php echo '<script'; ?>
 src="/public//libs/jquery/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/public/libs/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/adminpanel/adminpanel.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="hero">
	<div class="panel">
		<a href="/adminpanel/settings/"><div class="settings"></div></a>
		<span class="logon">Панель управления</span>
		<button id="logOut">Выход</button>
	</div>
	<div class="wrapper">
	  <?php echo $_smarty_tpl->getSubTemplate ('../includes/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	  
	    <div class="content">
		   <h1>Настройки</h1>

			<h2>Изменить логин / пароль</h2>
			<form id="changeAuthDataForm">
				<input type="hidden" name="flag" value="changeAuthData">
				<p>Новый логин:</p>
				<input type="text" id="new_login" name="new_login">
				<p>Старый пароль:</p>
				<input type="password" id="old_pass" name="old_pass">
				<p>Новый пароль:</p>
				<input type="password" id="new_pass" name="new_pass">
				<p>Повторите пароль:</p>
				<input type="password" id="re_pass" name="re_pass">
			</form>
			<button id="changeAuthData" class="btn">Изменить</button>
	    </div>
	   </div>
	   </div>
</body>
</html><?php }
}
?>