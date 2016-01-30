<?php
namespace App\models;

use App\core\SearchClass;
use App\core\Template;
use App\tables\BlogTable;

class Search extends Main {

	// Объект поиска //
	private $searchObj = null;
	// Индексированный запрос //
	private $indexQuery = null;
	// Данные поиска //
	private $dataSearch = false;

	public function __construct($query) {
		parent::__construct();
		$query = !empty( $query ) ? trim( $query ) : false;
		if ( !empty($query) ) {
			$this->searchObj  = new SearchClass();
			$this->indexQuery = ( $this->searchObj -> make_index($query) );
			$this->dataSearch = $this->getDataSearch();
		}
	}

	public function getDataSearch() {
		$query = $this->indexQuery;
		$select = array( "where" => "`id` >= 1" );
		$obj = new BlogTable($select);
		$data = $obj->getAllRows();
		$count = count($data);

		for ( $i=0; $count > $i; $i++ ) {
			$index = json_decode($data[$i]["index_title"]);

			if ( !empty($index) ) {
				$range = $this->searchObj->search($query, $index);
			}

			if ( $range > 0 ) {
				// $result[ $data[$i][ 'id' ] ] = $range;
				$result[] = $data[$i];
			}
		}

		// Если что-нибудь нашлось //
		if ( isset( $result ) ) {
			// Сортировка по убыванию //
			arsort( $result );
			
			return $result;
		}
		else {
			return false;
		}
	}

	public function render() {
		$smarty = new Template();
		$smarty->assign("search", $this->dataSearch);
		$smarty->display('search.tpl');
	}
}