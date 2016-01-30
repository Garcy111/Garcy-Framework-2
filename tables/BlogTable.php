<?php
namespace App\tables;
class BlogTable extends \App\core\Model_DB {

	public $id;
	#varchar(200)
	public $title;
	#text
	public $article_prev;
	#text
	public $article_full;
	#varchar(100)
	public $date;
	#text
	public $index_title;

	public function fieldsTable() {
		return array(
			"id" => "",
			"title" => "",
			"article_prev" => "",
			"article_full" => "",
			"date" => "",
			"index_title" => ""
			);
	}
}