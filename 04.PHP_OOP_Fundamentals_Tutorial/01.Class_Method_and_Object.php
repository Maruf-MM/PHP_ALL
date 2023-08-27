<?php
include "header.php";
class maruf
{
  public $name = "Muhit";
  public $myname = "Maruf";
  public $age;
  function personname()
  {
    echo "<br>Your brother name is: " . $this->name;
  }
  function personage($value)
  {
    echo "<br> Your brothers age is: " . $this->age = $value;
  }
}
$objectvar = new maruf;
echo $objectvar->myname;
$objectvar->personname();
$objectvar->personage("10");
include "footer.php";
