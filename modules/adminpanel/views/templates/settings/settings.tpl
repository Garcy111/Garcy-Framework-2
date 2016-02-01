<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" href="/public/styles/fonts.css" />
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
	<script src="/public//libs/jquery/jquery-2.1.1.min.js"></script>
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
		   <h1>Настройки</h1>

			<h2>Изменить логин / пароль</h2>
			<form id="changeAuthDataForm">
				<input type="hidden" name="flag" value="changeAuthData">
				<p>Новый логин:</p>
				<input type="text" id="new_login" name="new_login">
				<p>Старый пароль:</p>
				<input type="password" id="old_pass" name="old_pass">
				<p>Новый пароль:</p>
				<input type="password" id="new_pass" name="new_pass">
				<p>Повторите пароль:</p>
				<input type="password" id="re_pass" name="re_pass">
			</form>
			<button id="changeAuthData" class="btn">Изменить</button>
	    </div>
	   </div>
	   </div>
</body>
</html>