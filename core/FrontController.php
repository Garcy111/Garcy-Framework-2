<?php
namespace App\core;
	class FrontController {
		private $_module;
		private $_controller;
		private $_action;
		private $_params = array();
		private $_page = array();
		static $_instance;

		public static function getInstance() {
			if(!(self::$_instance instanceOf self))
				self::$_instance = new self;
				return self::$_instance;
		}

		 private function __construct() {
			$route = (empty($_GET['route']))?'': $_GET['route'];
			unset($_GET['route']);
			if(empty($route)) {
				$this->_module = 'IndexModule';
				$this->_controller = 'IndexController';
				$this->_action = 'indexAction';
				$splits = null;
			}
			else {
				$splits = explode('/', trim($route, '/\\'));
				// Choice module
				$split = strtolower($splits[0]);
				$dir = SITE_PATH.'/modules/';
				$names = array();
				if (is_dir($dir)) {
					if ($dh = opendir($dir)) {
					    while ($file = readdir($dh)) {
							if($file != '.' and $file != '..') {
								$names[] = strtolower($file);
							}	
					    }
				    }
				    closedir($dh);
				}

				if (in_array($split, $names)) {
					$this->_module = $split;
				}
				else {
					$this->_module = 'IndexModule';
				}


				if(strpos($splits[0],"=") !== false or empty($splits[0])) {
					$this->_module = 'IndexModule';
				}
			}
			if ($this->_module == 'IndexModule') {
				$this->setRoute($splits, 0);
			}
			else {
				$this->setRoute($splits, 1);
			}
		}

		private function setRoute($splits, $index) {
			// Choice controller
			if(!isset($splits[$index]) or strpos($splits[$index],"=") !== false) {
				$this->_controller = 'IndexController';
			} else {
				$this->_controller = ucfirst($splits[$index]).'Controller';
			}
			// Choice action
			$index++;
			$q = !empty($splits[$index])?strpos($splits[$index], "="):false;
			if(!empty($splits[$index]) && $q === false) {
				$this->_action = $splits[$index].'Action';
			} else $this->_action = 'indexAction';
			// Choice params
			$length = count($splits);
			for ($i=0; $length > $i; $i++) { 
				$q = strpos($splits[$i], "=");
				if($q !== false) {
					$inx = $i;
					break;
				}
			}
			if(isset($inx) && is_int($inx)) {
				$key = $val = array();
				for($i=$inx; count($splits) > $i; $i++) {
					$param = explode('=', $splits[$i]);
					if(!empty($param[0]) && !empty($param[1])) {
						$key[] .= $param[0];
						$val[] .= $param[1];
					}
					else throw new NotFoundPageException('Not valid parameter');
				}
				$this->_params = array_combine($key, $val);
			}

			// Management system site structure
			if(__CMS__) {
				if($this->_module == 'IndexModule'
					&& isset($splits[0])
					&& !class_exists('\App\controllers\\' . $this->_controller)) {
					$page = $splits[0];
					if(isset($splits[1])) {
						$page = $splits[0] . '/' . $splits[1];
					}
					$select = array("where" => "`page` = '$page'");
					$obj = new \App\tables\CmsTable($select);
					$data = $obj->getOneRow();
					if(!empty($data)) {
						$this->_page = $data;
						$this->_module = 'cms';
						$this->_controller = 'IndexController';
						$this->_action = 'indexAction';
					}
				}
			}
		}

		public function route() {
			if ($this->_module == 'IndexModule') {
				if(file_exists(SITE_PATH.'/controllers/'.$this->_controller.'.php')) {
					if(class_exists('\App\controllers\\' . $this->_controller)) {
						$rc = new \ReflectionClass('\App\controllers\\'.$this->_controller);
						if($rc->implementsInterface('\App\core\IController')) {
							if($rc->hasMethod($this->_action)) {
								$controller = $rc->newInstance();
								$method = $rc->getMethod($this->_action);
								$method->invoke($controller);
							} else throw new E404Exception('Wrong Action');
						} else throw new E404Exception('Wrong Interface');
					} else throw new E404Exception('Wrong Class Controller');
				} else throw new E404Exception('Wrong File Controller');
			}
			else {
				if(file_exists(SITE_PATH.'/modules/'. $this->_module .'/controllers/'.$this->_controller.'.php')) {
					if(class_exists('\App\modules\\'. $this->_module .'\controllers\\' . $this->_controller)) {
						$rc = new \ReflectionClass('\App\modules\\'. $this->_module .'\controllers\\'.$this->_controller);
						if($rc->implementsInterface('\App\core\IController')) {
							if($rc->hasMethod($this->_action)) {
								$controller = $rc->newInstance();
								$method = $rc->getMethod($this->_action);
								$method->invoke($controller);
							} else throw new E404Exception('Wrong Action');
						} else throw new E404Exception('Wrong Interface');
					} else throw new E404Exception('Wrong Class Controller');
				} else throw new E404Exception('Wrong File Controller');
			}
		}

		public function getModule() {
			return $this->_module;
		}

		public function getController() {
			return $this->_controller;
		}

		public function getAction() {
			return $this->_action;
		}

		public function getParams() {
			return $this->_params;
		}

		public function getPage() {
			return $this->_page;
		}
	}
?>