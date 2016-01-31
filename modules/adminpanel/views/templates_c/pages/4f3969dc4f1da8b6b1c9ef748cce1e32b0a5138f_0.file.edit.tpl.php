<?php /* Smarty version 3.1.27, created on 2016-02-01 00:56:05
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\pages\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1351656ae82f60019e4_41910001%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f3969dc4f1da8b6b1c9ef748cce1e32b0a5138f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\pages\\edit.tpl',
      1 => 1454277361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1351656ae82f60019e4_41910001',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ae82f6116019_69937454',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ae82f6116019_69937454')) {
function content_56ae82f6116019_69937454 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1351656ae82f60019e4_41910001';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
	<?php echo '<script'; ?>
 src="/public/libs/jquery/jquery-2.1.1.min.js"><?php echo '</script'; ?>
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
			<h1>Редактировать страницу</h1>
			<form id="dataFormEditPage">
				<input type="hidden" name="flag" value="editStaticPage">
				<input type="text" name="link">
				<textarea name="content"></textarea>
			</form>
			<button id="editStaticPage">Сохранить</button>
	    </div>
	   </div>
	   </div>
</body>
</html><?php }
}
?>