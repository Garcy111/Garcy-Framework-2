<?php /* Smarty version 3.1.27, created on 2015-12-31 15:28:06
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\includes\settings.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2373356851f56c9dd68_69363476%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbde31d9773a629a118caa50140e0d0bc8963380' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\includes\\settings.tpl',
      1 => 1451564883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2373356851f56c9dd68_69363476',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56851f56e64f70_35315245',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56851f56e64f70_35315245')) {
function content_56851f56e64f70_35315245 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2373356851f56c9dd68_69363476';
?>
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
<button id="changeAuthData" class="btn">Изменить</button><?php }
}
?>