<?php
include "header.php";
class php 
{
  public static function framework()
  {
    echo "Cake PHP is a framework"."<br>";
  }
  public function getname()
  {
    static::framework();
  }
  public static function classname()
  {
    return __CLASS__."<br>";
  }
}
class childphp extends php
{
  public static function framework()
  {
    echo "Laravel is a framework"."<br>";
  }
  public static function classname()
  {
    return __CLASS__."<br>";
  }
}
$obj= new php;
$obj->getname();
echo $obj->classname();

$obj1= new childphp;
$obj1-> getname();
echo $obj1->classname();
childphp::framework();

include "footer.php";
?>