<?php
include "header.php";
class arr 
{
  public function name(array $a)
  {
    foreach($a as $key)
    {
      echo $key[0];
      echo " : ";
      echo $key[1] * $key[2]."<br>";
    }
  }
}
$obj= new arr();
$arname= array(
  array('Maruf','3','8'),
  array('Munna','6','3')
);
$obj->name($arname);
spl_autoload_register(function($class_name)
{
  include $class_name.".php";
});
$o= new PHPM;
new PHPN($o);


include "footer.php";
?>