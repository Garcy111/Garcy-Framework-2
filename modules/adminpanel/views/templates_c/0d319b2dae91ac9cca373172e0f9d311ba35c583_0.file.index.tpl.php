<?php /* Smarty version 3.1.27, created on 2016-01-31 23:13:35
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2525056ae6aef68ee07_08465238%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d319b2dae91ac9cca373172e0f9d311ba35c583' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\index.tpl',
      1 => 1454271214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2525056ae6aef68ee07_08465238',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ae6aef8f8c51_67610745',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ae6aef8f8c51_67610745')) {
function content_56ae6aef8f8c51_67610745 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2525056ae6aef68ee07_08465238';
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
		   <h1>Главная страница</h1>
	    </div>
	   </div>
	   </div>
</body>
</html><?php }
}
?>