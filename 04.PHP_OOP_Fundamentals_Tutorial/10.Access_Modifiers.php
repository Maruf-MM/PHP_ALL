<?php
include "header.php";
class access_modifier
{
  public $id;
  private $name;
  protected $age=25;
  public function __construct($a,$b)
  {
    $this->id=$a;
    $this->name=$b;
   
  }
  public function func()
  {
    echo "ID no is {$this->id} Name is: {$this->name} and age is {$this->age} This is inside from Main class. <br>";
  }
}
class extra extends access_modifier
{
  public function func()
  {
    echo "ID no is {$this->id} Name is: {$this->name} and Age is {$this->age} This is from Sub class <br>";
  }
}
$obj= new access_modifier(1,'Maruf');
$obj->func();
$nobj= new extra('1','Tafsir');
$nobj->func();
include "footer.php";
?>