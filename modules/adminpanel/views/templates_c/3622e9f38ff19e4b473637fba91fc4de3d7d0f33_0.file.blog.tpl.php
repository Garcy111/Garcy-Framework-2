<?php /* Smarty version 3.1.27, created on 2016-01-31 18:26:36
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3217956ae27ac59db57_26710247%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3622e9f38ff19e4b473637fba91fc4de3d7d0f33' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\blog.tpl',
      1 => 1454253992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3217956ae27ac59db57_26710247',
  'variables' => 
  array (
    'imgs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ae27ac6d9d71_15082214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ae27ac6d9d71_15082214')) {
function content_56ae27ac6d9d71_15082214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3217956ae27ac59db57_26710247';
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
		   <h1>Новая статья</h1>
			<form action="/adminpanel/ajax/" method="POST">
				<input type="hidden" name="flag" value="saveArticle">
				<input type="text" name="title" id="nameArticle" placeholder="Заголовок">
				<textarea name="content" id="contentArticle"></textarea>
				<button class="btn" type="submit">Сохранить</button>
			</form>

			<h1>Менеджер изображений</h1>
			<?php echo '<script'; ?>
 src="/public/libs/ajaxupload/ajaxupload.3.5.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="/public/js/upload-img.js"><?php echo '</script'; ?>
>
			<div class="img-manager">
			<div id="upload" ><span>Обзор<span></div>
			<span id="status" ></span>
			<!-- <ul id="files" ></ul> -->
			<p>Путь к изображению (Sourse):</p>
			<input type="text" id="sourse" placeholder="Кликните на изображение">

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['img'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['img']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['name'] = 'img';
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['imgs']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['img']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['img']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['img']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['img']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['img']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['img']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['img']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['img']['total']);
?>
				<div class="img-prev">
					<img src="/public/uploads/min/<?php echo $_smarty_tpl->tpl_vars['imgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['img']['index']];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['imgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['img']['index']];?>
">
					<button data-img="<?php echo $_smarty_tpl->tpl_vars['imgs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['img']['index']];?>
">Удалить</button>	
				</div>
			<?php endfor; endif; ?>
			</div>
	    </div>
	   </div>
	   </div>
</body>
</html><?php }
}
?>