<h1>Новая статья</h1>
<form action="/adminpanel/ajax/" method="POST">
	<input type="hidden" name="flag" value="saveArticle">
	<input type="text" name="title" id="nameArticle" placeholder="Заголовок">
	<textarea name="content" id="contentArticle"></textarea>
	<button class="btn" type="submit">Сохранить</button>
</form>

<h1>Менеджер изображений</h1>
<script src="/public/libs/ajaxupload/ajaxupload.3.5.js"></script>
<script src="/public/js/upload-img.js"></script>
<div class="img-manager">
<div id="upload" ><span>Обзор<span></div>
<span id="status" ></span>
<!-- <ul id="files" ></ul> -->
<p>Путь к изображению (Sourse):</p>
<input type="text" id="sourse" placeholder="Кликните на изображение">

{section name=img loop=$imgs}
	<div class="img-prev">
		<img src="/public/uploads/min/{$imgs[img]}" alt="{$imgs[img]}">
		<button data-img="{$imgs[img]}">Удалить</button>	
	</div>
{/section}
</div>