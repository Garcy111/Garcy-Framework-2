<?php /* Smarty version 3.1.27, created on 2016-01-20 00:13:55
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\includes\blog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28010569ea7135ccd01_15996144%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2190786a74b046a940de563ddff5aa796a079bea' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\includes\\blog.tpl',
      1 => 1453235577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28010569ea7135ccd01_15996144',
  'variables' => 
  array (
    'imgs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_569ea7136d2ad5_42568213',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_569ea7136d2ad5_42568213')) {
function content_569ea7136d2ad5_42568213 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28010569ea7135ccd01_15996144';
?>
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
</div><?php }
}
?>