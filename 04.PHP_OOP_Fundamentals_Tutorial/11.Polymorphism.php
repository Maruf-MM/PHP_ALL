<?php
include "header.php";
class polymorphi
{
  Public $name;
  public $age;
  public function __construct($a,$b)
  {
    $this->name=$a;
    $this->age=$b;
  }
  public function show()
  {
    echo "My name is {$this->name} and I am {$this->age} years old.";   
  }
}
class polymorphi2 extends polymorphi
{
  Public $hafez;
  
  public function __construct($a,)
  {
    $this->hafez=$a;
  }
  public function show2($a,$b)
  {
    echo "My name is $a and I am $b years old and I am a {$this->hafez} of Al Quran";   
  }
}
$object= new polymorphi('Maruf','23');
$object->show();
echo "<br>";
$object2= new polymorphi2('HAFEZ');
$object2->show2('Muhit','12');

echo "<br>";
if($object2 instanceof polymorphi)
{
  echo "Inherited";
}
include "footer.php";
?>