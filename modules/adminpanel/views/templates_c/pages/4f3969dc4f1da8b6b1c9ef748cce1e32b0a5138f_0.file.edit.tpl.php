<?php /* Smarty version 3.1.27, created on 2016-02-01 13:44:16
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\pages\edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2507756af3700745135_06737458%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f3969dc4f1da8b6b1c9ef748cce1e32b0a5138f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\pages\\edit.tpl',
      1 => 1454323455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2507756af3700745135_06737458',
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56af3700948040_65398964',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56af3700948040_65398964')) {
function content_56af3700948040_65398964 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2507756af3700745135_06737458';
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
				<input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_id'];?>
">
				<input type="text" name="link" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['link'];?>
">
				<textarea name="content"><?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>
</textarea>
			</form>
			<button id="editStaticPage">Сохранить</button>
	    </div>
	   </div>
	   </div>
</body>
</html><?php }
}
?>