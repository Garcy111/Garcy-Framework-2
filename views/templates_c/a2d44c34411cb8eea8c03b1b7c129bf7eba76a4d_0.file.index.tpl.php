<?php /* Smarty version 3.1.27, created on 2016-01-29 17:46:07
         compiled from "C:\OpenServer\domains\localhost\views\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:420756ab7b2f5d1b05_86683761%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d44c34411cb8eea8c03b1b7c129bf7eba76a4d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\localhost\\views\\templates\\index.tpl',
      1 => 1454070395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '420756ab7b2f5d1b05_86683761',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56ab7b2f6b9664_65811500',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56ab7b2f6b9664_65811500')) {
function content_56ab7b2f6b9664_65811500 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '420756ab7b2f5d1b05_86683761';
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="/public/libs/bootstrap/css/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="/public/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/public/styles/fonts.css" />
	<link rel="stylesheet" href="/public/styles/main.css" />
	<link rel="stylesheet" href="/public/styles/index.css" />
	<link rel="stylesheet" href="/public/styles/media.css" />
	<title>Главная страница</title>
</head>
<body>


<div class="container">
	<h1>Garcy Framework</h1>

	<form action="/search/" method="GET">
		<input type="search" name="query">
		<button type="submit">Найти</button>
	</form>

	<ul>
		<li>MVC Архитектура для приложений и модулей</li>
		<li>Легкая и понятная систама роутинга для ЧПУ</li>
		<li>Мультипроекты: несколько проектов на одном ядре и модулях</li>
		<li>Простой и быстрый шаблонизатор Smarty</li>
		<li>Умный загрузчик классов, производительность</li>
		<li>Простые и понятные модули, легкость в написании своих модулей</li>
		<li>Умный поисковый механизм</li>
	</ul>
</div>

	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="/public/libs/html5shiv/es5-shim.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/public/libs/html5shiv/html5shiv.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/public/libs/html5shiv/html5shiv-printshiv.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/public/libs/respond/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="/public/libs/jquery/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/public/js/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/public/js/index.js"><?php echo '</script'; ?>
>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html><?php }
}
?>