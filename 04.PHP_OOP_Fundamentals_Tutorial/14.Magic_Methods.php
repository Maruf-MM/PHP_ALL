<?php
include "header.php";
class name
{
  // public $name;
  public function show()
  {
    echo "My name is <br>";
  }
  public function __get($undefine_object)
  {
    echo"$undefine_object<br>";
  }
  public function __set($property,$value)
  {
    echo "We set $property->$value<br>";
  }
  public function __call($pm, $value)
  {
    echo "There is no ".$pm." method and arguments ".implode(', ',  $value);
  }
}
$obj= new name();
$obj->show();
$obj->Maruf;
$obj->Munna=17;
$obj->array('10','12');
include "footer.php";
?>