<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/public/styles/fonts.css" />
	<link rel="stylesheet" href="/public/styles/main.css" />
	<title>Search</title>
</head>
<body>
	<h1>Результаты поиска</h1>
	{if !empty($search)}
	{section name=search loop=$search}
		
		<h2>{$search[search]["title"]}</h2>
		<p>{$search[search]["article_full"]}</p>
		
	{/section}
	{else}
		<p>По Вашему запросу ничего не найдено.</p>
	{/if}
</body>
</html>