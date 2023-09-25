<?php
include "header.php";
abstract class name 
{
  public function fun()
  {
    echo "from main class ".__CLASS__."<br>";
    echo "from main class ".get_class($this)."<br>";
  }
}
class game extends name
{
  public function func()
  {
    echo "from sub class ".__CLASS__."<br>";
    echo "from sub class ".get_class($this)."<br>";
  }
}
$obj= new game;
$obj->fun();
$obj->func();
include "footer.php";
?>