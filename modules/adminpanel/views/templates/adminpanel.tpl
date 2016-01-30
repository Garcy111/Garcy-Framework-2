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
		<a href="/adminpanel/settings/"><div class="settings"></div></a>
		<span class="logon">Панель управления</span>
		<button id="logOut">Выход</button>
	</div>
	<div class="wrapper">
	  <nav>
	      <ul class="nav">
	        <li {if $controller == 'Index'} class="click" {/if}><a href="/adminpanel/">Главная</a></li>
	       <li {if $controller == 'Pages'} class="click" {/if}><a href="/adminpanel/pages/">Страницы</a></li>
	        <li {if $controller == 'Blog'} class="click" {/if}><a href="/adminpanel/blog/">Блог</a></li>
	      </ul>
	    </nav>
	  
	    <div class="content">
		    {if $controller == 'Index'}
				{include file='includes/index.tpl'}
			{else if $controller == 'Pages'}
				{include file='includes/pages.tpl'}
			{else if $controller == 'Blog'}
				{include file='includes/blog.tpl'}
			{else if $controller == 'Settings'}
				{include file='includes/settings.tpl'}
			{else}
			<h1>Страница не найдена.</h1>
			{/if}
	    </div>
	   </div>
	   </div>
</body>
</html>