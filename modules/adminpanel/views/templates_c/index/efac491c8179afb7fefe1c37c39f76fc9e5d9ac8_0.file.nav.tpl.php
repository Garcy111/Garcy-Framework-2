<?php /* Smarty version 3.1.27, created on 2016-02-01 01:04:10
         compiled from "C:\OpenServer\domains\localhost\modules\adminpanel\views\templates\includes\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:299056ae84da9f5b76_94547642%%*/
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
  'nocache_hash' => '299056ae84da9f5b76_94547642',
  'variables' => 
  array (
    'controller' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ae84daab7e52_36052784',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ae84daab7e52_36052784')) {
function content_56ae84daab7e52_36052784 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '299056ae84da9f5b76_94547642';
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