<?php
include "header.php";
// include dirname(__FILE__)."/Classes/16.1.Autoloading_Classes.php";
spl_autoload_register(function($class_name)
{
  echo $class_name;
  include $class_name.".php";
});
  $java = new java();
  $ruby = new ruby();
  $php = new php();
include "footer.php";
