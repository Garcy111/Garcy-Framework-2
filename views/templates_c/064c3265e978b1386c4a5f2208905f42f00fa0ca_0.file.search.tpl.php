<?php /* Smarty version 3.1.27, created on 2016-01-29 17:46:05
         compiled from "C:\OpenServer\domains\localhost\views\templates\search.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:187056ab7b2dd108d9_84554367%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '064c3265e978b1386c4a5f2208905f42f00fa0ca' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\views\\templates\\search.tpl',
      1 => 1453754858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187056ab7b2dd108d9_84554367',
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ab7b2de3b9e4_87842622',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ab7b2de3b9e4_87842622')) {
function content_56ab7b2de3b9e4_87842622 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '187056ab7b2dd108d9_84554367';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/public/styles/fonts.css" />
	<link rel="stylesheet" href="/public/styles/main.css" />
	<title>Search</title>
</head>
<body>
	<h1>Результаты поиска</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['search']->value)) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['search'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['search']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['name'] = 'search';
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['search']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['search']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['search']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['search']['total']);
?>
		
		<h2><?php echo $_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]["title"];?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['search']->value[$_smarty_tpl->getVariable('smarty')->value['section']['search']['index']]["article_full"];?>
</p>
		
	<?php endfor; endif; ?>
	<?php } else { ?>
		<p>По Вашему запросу ничего не найдено.</p>
	<?php }?>
</body>
</html><?php }
}
?>