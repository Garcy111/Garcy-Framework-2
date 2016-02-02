<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Редактировать страницу</title>
	<link rel="stylesheet" href="/public/styles/fonts.css" />
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
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
			<h1 class="title">Редактировать страницу</h1>
			<form id="dataFormEditPage">
				<input type="hidden" name="flag" value="editStaticPage">
				<input type="hidden" name="page_id" value="{$page['page_id']}">
				<input type="text" name="link" value="{$page['link']}">
				<textarea name="content">{$page['content']}</textarea>
			</form>
			<button id="editStaticPage">Сохранить</button>
	    </div>
	   </div>
	   </div>
</body>
</html>