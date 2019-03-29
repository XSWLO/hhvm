<?php

class ClassAutoloader {
  public function __construct() {
    spl_autoload_register(array($this, 'loader'));
  }
  private function loader($className) {
    echo 'Trying to load ', $className, ' via ', __METHOD__, "()\n";
    if ($className == "testCore") {
      var_dump("myClass expect");
      include 'spl_autoload_register_class_private.inc';
    }
  }
}


<<__EntryPoint>>
function main_spl_autoload_register_class_private_array_object() {
$autoloader = new ClassAutoloader();
$obj = new testCore();
}
