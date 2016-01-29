<?php
namespace App\modules\adminpanel\core;

	class Template extends \Smarty {

		public function __construct() {
			parent::__construct();
			$this->template_dir = SITE_PATH.'modules/adminpanel/views/templates/';
			$this->compile_dir = SITE_PATH.'modules/adminpanel/views/templates_c/';
			$this->config_dir = SITE_PATH.'modules/adminpanel/views/congigs/';
			$this->cache_dir = SITE_PATH.'modules/adminpanel/views/cache/';
		}
	}