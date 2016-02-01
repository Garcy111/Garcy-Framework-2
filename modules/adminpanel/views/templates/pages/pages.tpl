<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
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
			<h1>Страницы</h1>
			<a href="/adminpanel/pages/add=page/">
				<button>Добавить страницу</button>
			</a>
			{section name=page loop=$pages}
				<p>{$pages[page]['link']}</p>
				<a href="/adminpanel/pages/edit={$pages[page]['page_id']}">
					<button>Редактировать</button>
				</a>
			{/section}
	    </div>
	   </div>
	   </div>
</body>
</html>