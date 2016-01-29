<?php
	define('DS', DIRECTORY_SEPARATOR); // разделитель путей к файлам для всех ОС
	$sitePath = realpath(dirname(__FILE__).DS).DS;
	define('SITE_PATH', $sitePath); // путь к корневой папке сайта
	define('COUNT_ITEMS', 16); // количество продуктов/статей на одной странице
	// путь к библиотеке Smarty
	define('SMARTY_TEMPLATE', SITE_PATH.'views/templates/');
	define('SMARTY_COMPILE', SITE_PATH.'views/templates_c/');
	define('SMARTY_CONFIG', SITE_PATH.'views/congigs/');
	define('SMARTY_CACHE', SITE_PATH.'views/cache/');
	define('__EMAIL__', 'email@email.com');

	// Подключение к БД
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'garcy');