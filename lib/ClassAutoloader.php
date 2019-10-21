<?php

//This class simply pulls in all classes so we don't have to include them on every page.
class ClassAutoloader {
    public function __construct() {
        spl_autoload_register(array($this, 'loader'));
    }

	private function loader($className) {
      if (file_exists($_SERVER['DOCUMENT_ROOT']."/lib/$className.php")){
         include $_SERVER['DOCUMENT_ROOT']."/lib/$className.php";
      }
	}    
}