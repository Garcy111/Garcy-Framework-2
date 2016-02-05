<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Все страницы</title>
	<link rel="stylesheet" href="/public/styles/fonts.css" />
	<link rel="stylesheet" href="/public/styles/adminpanel/adminpanel.css">
	<link rel="stylesheet" href="/public/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<script src="/public/libs/jquery/jquery-2.1.1.min.js"></script>
	<!-- arcticModal -->
	<script src="/public/libs/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
	<link rel="stylesheet" href="/public/libs/arcticmodal/jquery.arcticmodal-0.3.css">
	<!-- arcticModal theme -->
	<link rel="stylesheet" href="/public/libs/arcticmodal/themes/ap.css">
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
			<a href="/adminpanel/pages/add=page/">
				<button class="addStaticPage"><i class="fa fa-file-text-o"></i>Добавить</button>
			</a>
			<input type="search" class="searchStaticPage" placeholder="Найти страницу">
			<div class="pages">
			{section name=page loop=$pages}
				<div class="page">
					<a href="/adminpanel/pages/edit={$pages[page]['page_id']}" class="link">{$pages[page]['link']}</a>
					<a href="/{$pages[page]['link']}/" target="__blank">
						<button class="viewStaticPage"><i class="fa fa-eye"></i></button>
					</a>
					<button class="delStaticPageBtn" id="{$pages[page]['page_id']}"><i class="fa fa-trash"></i></button>
					<div style="display: none;">
						<div class="box-modal" id="delModal_{$pages[page]['page_id']}">
						<h3 class="title_modal">Вы уверены что хотите удалить страницу "{$pages[page]['link']}" ?</h3>
							<div class="btns-modal">
								<button class="delStaticPage" id="{$pages[page]['page_id']}">Да</button>
								<div class="arcticmodal-close cancel-modal">
									<button>Отмена</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			{/section}
			</div>
	    </div>
	   </div>
	   </div>
</body>
</html>