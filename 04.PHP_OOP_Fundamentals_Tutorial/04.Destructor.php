<?php
include "header.php";
class maruf
{
  public $name;
  public $age;
  public $id;

  function __construct($a, $b)
  {
    $this->name = $a;
    $this->age = $b;
  }
  function id($catch)
  {
    $this->id = $catch;
    echo "Id number is: $catch<br>";
  }
  function __destruct()
  {
    if (empty($id)) {
      echo "Destructor is successfully work";
    } else
      echo 'Destructor is not work';
  }
}
$obj = new maruf("Maruf", '23');
$obj->id('1');

unset($obj);


include "footer.php";
