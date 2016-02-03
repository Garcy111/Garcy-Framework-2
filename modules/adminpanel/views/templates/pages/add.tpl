<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" href="/public/styles/fonts.css" />
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
	<link rel="stylesheet" href="/public/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<script src="/public/libs/jquery/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/public/libs/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="/public/js/adminpanel/adminpanel.js"></script>
</head>
<body>
	<div class="hero">
	<div class="panel">
		<a href="/adminpanel/settings/"><div class="settings"></div></a>
		<span class="logon">Панель управления</span>
		<button id="logOut">Выход</button>
	</div>
	<div class="wrapper">
	{include file='../includes/nav.tpl'}
	    <div class="content">
			<h1 class="title">Новая страница</h1>
			<form id="dataFormAddPage">
				<div class="icon-help"><i class="fa fa-question-circle"></i></div>
				<input type="hidden" name="flag" value="addStaticPage">
				<input type="text" name="link" class="urlInput" onchange="validUrl()" placeholder="Адрес страницы">
				<textarea name="content" id="staticPage"></textarea>
			</form>
			<button id="addStaticPage" class="addStaticPage"><i class="fa fa-plus-circle"></i>Добавить</button>
	    </div>
	   </div>
	   </div>
</body>
</html>