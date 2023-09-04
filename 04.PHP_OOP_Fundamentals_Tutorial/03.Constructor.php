<?php
include "header.php";

class person 
{
  public $name;
  Public $age;
  
  public function __construct($a,$b)
  {
    $this->name = $a;
    $this->age  = $b;
  }
  public function person_details()
  {
    echo "Person name is {$this->name} and person age is {$this->age}";
  }

  }
$obj=new person('Maruf','10');
$obj->person_details();


include "footer.php";
?>