<?php
// config file
require_once 'config/init.php';

// auto loading instead of doing require once
function myAutoload($class_name){
    require_once 'lib/'.$class_name. '.php';
}
spl_autoload_register('myAutoload');

//echo 'init included';
?>