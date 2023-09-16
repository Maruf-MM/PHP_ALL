<?php
include "header.php";
abstract class student
{
  public $name;
  public $age;
  public function details()
  {
    echo $this->name." is ".$this->age ." years old";
  }
  abstract public function school();
}
class boys extends student{
  public function describe()
  {
    return parent::details();
  }
  public function school()
  {
    return"I like to read story book";
  }

}
$obj=new boys();
$obj->name='kamal';
$obj->age=23;
$obj->describe();
echo "<br>";
echo $obj->school();

include "footer.php";
?>