<?php /* Smarty version 3.1.27, created on 2016-01-31 13:38:34
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\includes\pages.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1485156ade42ab4fca0_19563957%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5c394ec22ba1733d5f841c8297aec6d718fdffa' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\includes\\pages.tpl',
      1 => 1454236714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1485156ade42ab4fca0_19563957',
  'variables' => 
  array (
    'add' => 0,
    'edit' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ade42ad336a7_14904317',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ade42ad336a7_14904317')) {
function content_56ade42ad336a7_14904317 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1485156ade42ab4fca0_19563957';
if ($_smarty_tpl->tpl_vars['add']->value == 'page') {?>
<h1>Новая страница</h1>
<form id="dataFormAddPage">
	<input type="hidden" name="flag" value="addStaticPage">
	<input type="text" name="link">
	<textarea name="content"></textarea>
</form>
<button id="addStaticPage">Добавить</button>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['edit']->value)) {?>
<h1>Редактировать страницу</h1>
<form id="dataFormEditPage">
	<input type="hidden" name="flag" value="editStaticPage">
	<input type="text" name="link">
	<textarea name="content"></textarea>
</form>
<button id="editStaticPage">Сохранить</button>
<?php } else { ?>
<h1>Страницы</h1>
<a href="/adminpanel/pages/add=page/">
	<button>Добавить страницу</button>
</a>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['page'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['page']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['name'] = 'page';
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pages']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['page']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['page']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['page']['total']);
?>
	<p><?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['link'];?>
</p>
	<a href="/adminpanel/pages/edit=<?php echo $_smarty_tpl->tpl_vars['pages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['page']['index']]['link_id'];?>
">
		<button>Редактировать</button>
	</a>
<?php endfor; endif; ?>
<?php }
}
}
?>