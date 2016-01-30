<?php
namespace App\modules\cms\core;

	class Template extends \Smarty {

		public function __construct() {
			parent::__construct();
			$this->template_dir = SITE_PATH.'modules/cms/views/templates/';
			$this->compile_dir = SITE_PATH.'modules/cms/views/templates_c/';
			$this->config_dir = SITE_PATH.'modules/cms/views/congigs/';
			$this->cache_dir = SITE_PATH.'modules/cms/views/cache/';
		}
	}