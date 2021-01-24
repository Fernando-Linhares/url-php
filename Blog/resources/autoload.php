<?php
spl_autoload_register(
function($classname){
	$dir = __DIR__;
	$prefix = __NAMESPACE__;
	$name = str_replace("\\", "/", $classname);
	$class = $dir.$prefix."/".$name.".php";
	echo $class;
}
);