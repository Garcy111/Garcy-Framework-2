<?php /* Smarty version 3.1.27, created on 2016-02-01 01:04:10
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\index\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3178556ae84da7b0c64_78698979%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b78e59bde58228be9ff717715dc3f416da663e7e' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\index\\index.tpl',
      1 => 1454277850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3178556ae84da7b0c64_78698979',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ae84da9813a9_71837079',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ae84da9813a9_71837079')) {
function content_56ae84da9813a9_71837079 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3178556ae84da7b0c64_78698979';
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
		   <h1>Главная страница</h1>
	    </div>
	   </div>
	   </div>
</body>
</html><?php }
}
?>