<?php /* Smarty version 3.1.27, created on 2016-02-01 00:53:21
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\includes\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1923356ae8251261f10_50181799%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efac491c8179afb7fefe1c37c39f76fc9e5d9ac8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\modules\\adminpanel\\views\\templates\\includes\\nav.tpl',
      1 => 1454253777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1923356ae8251261f10_50181799',
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ae82512b01f0_94225451',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ae82512b01f0_94225451')) {
function content_56ae82512b01f0_94225451 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1923356ae8251261f10_50181799';
?>
<nav>
<ul class="nav">
	<li <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'Index') {?> class="click" <?php }?>><a href="/adminpanel/">Главная</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'Pages') {?> class="click" <?php }?>><a href="/adminpanel/pages/">Страницы</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['controller']->value == 'Blog') {?> class="click" <?php }?>><a href="/adminpanel/blog/">Блог</a></li>
</ul>
</nav><?php }
}
?>