<?php
namespace App\modules\adminpanel\models;

use App\modules\adminpanel\core\Template;
use App\tables\Table_Blog;
use App\core\SearchClass;
use App\core\ImageManager;

class Blog extends Main {

	// Изображения из менеджера
	private $imgs;

	public function __construct() {
		parent::__construct();
		$path = SITE_PATH."public/uploads/";
		$Image = new ImageManager($path);
		$this->imgs = $Image->getImages();
	}

	public static function saveArticle($title, $content) {
		$obj = new Table_Blog();
		$obj->fetchOne();
		$obj->title = $title;
		$article_prev = strip_tags($content);
		$article_prev = self::getShortText($article_prev);
		$obj->article_prev = $article_prev;
		$obj->article_full = $content;
		$obj->date = date("j/m/Y в G:i");
		// Индексируем заголовок для поиска //
		$index = ((new SearchClass()) -> make_index($title));
		$obj->index_title = json_encode($index);
		$obj->save();
	}

	public static function getShortText($text, $maxchar = 700) {
		if(iconv_strlen($text, 'utf-8') < $maxchar)
			return $text;
		$text = iconv_substr( $text, 0, $maxchar, 'utf-8' );
		$text = preg_replace('@(.*)\s[^\s]*$@s', '\\1 ...', $text);
			return $text;
	}

	public function render() {
		$smarty = new Template();
		$smarty->assign('controller', $this->_controller);
		$smarty->assign('imgs', $this->imgs);
		$smarty->display('adminpanel.tpl');
	}
}