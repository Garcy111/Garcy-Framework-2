<?php
namespace App\core;

	class Template extends \Smarty {

		public function __construct($path, $folder) {
			parent::__construct();
			$this->template_dir = SITE_PATH . $path . 'views/templates/' . $folder . '/';
			$this->compile_dir = SITE_PATH . $path . 'views/templates_c/' . $folder . '/';
			$this->config_dir = SITE_PATH . $path . 'views/congigs/' . $folder . '/';
			$this->cache_dir = SITE_PATH . $path . 'views/cache/' . $folder . '/';
		}
	}