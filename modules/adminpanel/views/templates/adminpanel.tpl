<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Админ панель</title>
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
	<script src="/public//libs/jquery/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/public/libs/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="/public/js/adminpanel/adminpanel.js"></script>
</head>
<body>
	<div class="hero">
	<div class="panel">
		<a href="/adminpanel/index/settings/"><div class="settings"></div></a>
		<span class="logon">Панель управления</span>
		<button id="logOut">Выход</button>
	</div>
	<div class="wrapper">
	  <nav>
	      <ul class="nav">
	        <li {if $action == 'indexAction'} class="click" {/if}><a href="/adminpanel/">Главная</a></li>
	        <li {if $action == 'blogAction'} class="click" {/if}><a href="/adminpanel/index/blog/">Блог</a></li>
	      </ul>
	    </nav>
	  
	    <div class="content">
		    {if $action == 'indexAction'}
				{include file='includes/index.tpl'}
			{else if $action == 'blogAction'}
				{include file='includes/blog.tpl'}
			{else if $action == 'settingsAction'}
				{include file='includes/settings.tpl'}
			{else}
			<h1>Страница не найдена.</h1>
			{/if}
	    </div>
	   </div>
	   </div>
</body>
</html>