<?php
namespace App\core;

class ImageManager {

	public $path;
	public $img;

	public function __construct($path="", $img="") {
		$this->path = $path;
		$this->img = $img;
	}

	public function getImages() {
		$dir = $this->path;
		$names = array();
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
			    while ($file = readdir($dh)) {
					if($file != '.' and $file != '..' and $file != 'min') {
						$names[] = $file;
					}	
			    }
		    }
		    closedir($dh);
		}
		rsort($names);
		return $names;
	}

	public function delImage() {
		$file = $this->path.$this->img;
		$file_min = $this->path."/min/".$this->img;
		unlink($file);
		unlink($file_min);
	}
}
?>