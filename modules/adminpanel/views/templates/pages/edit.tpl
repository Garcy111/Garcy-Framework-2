<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Редактировать страницу</title>
	<link rel="stylesheet" href="/public/styles/fonts.css" />
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
	<link rel="stylesheet" href="/public/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<script src="/public/libs/jquery/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/public/libs/tinymce/tinymce.min.js"></script>
	<!-- arcticModal -->
	<script src="/public/libs/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
	<link rel="stylesheet" href="/public/libs/arcticmodal/jquery.arcticmodal-0.3.css">
	<!-- arcticModal theme -->
	<link rel="stylesheet" href="/public/libs/arcticmodal/themes/ap.css">
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
			<button class="mi-btn"><i class="fa fa-picture-o"></i></button>
			<form id="dataFormEditPage" action="/adminpanel/ajax/" method="POST">
				<div class="icon-help"><i class="fa fa-question-circle"></i></div>
				<input type="hidden" name="flag" value="editStaticPage">
				<input type="hidden" name="page_id" value="{$page['page_id']}">
				<input type="text" name="link" class="urlInput" onchange="validUrl()" placeholder="Адрес страницы" value="{$page['link']}">
				<input type="text" name="title" class="titleInput" placeholder="Название страницы" value="{$page['title']}">
				<textarea name="content" id="staticPage">{$page['content']}</textarea>
			</form>
				<button id="editStaticPage"><i class="fa fa-floppy-o"></i> Сохранить</button>
	    </div>
	   </div>
	   </div>

	   <div style="display: none;">
			<div class="box-modal" id="mi-modal">
				<h1 class="mi-title">Менеджер изображений</h1>
				<script src="/public/libs/ajaxupload/ajaxupload.3.5.js"></script>
				<script src="/public/js/adminpanel/upload-img.js"></script>
				<div class="img-manager">
				<div id="upload" ><span>Обзор<span></div>
				<span id="status" ></span>
				<!-- <ul id="files" ></ul> -->
				<p>Путь к изображению (Sourse):</p>
				<input type="text" id="sourse" placeholder="Кликните на изображение">
				
				<div class="imgs-prev">
				{section name=img loop=$imgs}
					<div class="img-prev">
						<img src="/public/uploads/min/{$imgs[img]}" alt="{$imgs[img]}">
						<button data-img="{$imgs[img]}">Удалить</button>	
					</div>
				{/section}
				</div>
			</div>
			</div>
		</div>

	   <div style="display: none;">
			<div class="box-modal" id="help">
				<p>Только латинские буквы и цифры</p>
				<p>От 1 до 100 символов</p>
			</div>
		</div>
</body>
</html>