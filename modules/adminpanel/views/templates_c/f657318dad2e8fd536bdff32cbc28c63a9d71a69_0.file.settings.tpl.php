<?php /* Smarty version 3.1.27, created on 2016-01-31 18:26:42
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2122556ae27b2d97466_06567528%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f657318dad2e8fd536bdff32cbc28c63a9d71a69' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\settings.tpl',
      1 => 1454253979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2122556ae27b2d97466_06567528',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ae27b302e8e1_36333824',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ae27b302e8e1_36333824')) {
function content_56ae27b302e8e1_36333824 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2122556ae27b2d97466_06567528';
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
	  <?php echo $_smarty_tpl->getSubTemplate ('includes/nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
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