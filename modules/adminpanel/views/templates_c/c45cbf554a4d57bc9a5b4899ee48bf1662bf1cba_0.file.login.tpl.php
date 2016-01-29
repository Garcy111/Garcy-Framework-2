<?php /* Smarty version 3.1.27, created on 2016-01-28 01:37:23
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1770256a946a30c1855_06820971%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c45cbf554a4d57bc9a5b4899ee48bf1662bf1cba' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\login.tpl',
      1 => 1453934242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770256a946a30c1855_06820971',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56a946a3244e59_25475641',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56a946a3244e59_25475641')) {
function content_56a946a3244e59_25475641 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1770256a946a30c1855_06820971';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Вход в админ панель</title>
	<link href="/favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" href="/public/styles/adminpanel/login.css">
	<?php echo '<script'; ?>
 src="/public/libs/jquery/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/adminpanel/login.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="hero">
	<div id="logInBlock">
	<h1>Админ панель</h1>
	<p>Имя: </p>
		<input id="login" type="text">
	<p>Пароль: </p>
		<input id="password" type="password">
		<button id="logIn">Вход</button>
	</div>
	</div>
</body>
</html><?php }
}
?>