<?php
	define('DS', DIRECTORY_SEPARATOR);
	$sitePath = realpath(dirname(__FILE__).DS).DS;
	define('SITE_PATH', $sitePath); // путь к корневой папке сайта
	define('COUNT_ITEMS', 16); // количество итемов на одной странице
	define('__CMS__', true); // Система управления струкурой сайта
	define('__EMAIL__', 'email@email.com');

	// Подключение к БД
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'garcy');