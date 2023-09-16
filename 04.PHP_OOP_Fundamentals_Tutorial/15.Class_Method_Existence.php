<?php
include "header.php";
class student
{
  public function show()
  {
    echo"function exists";
  }
}
$o= new student();
if (class_exists("student"))
{
  echo "Class exists<br>";
  
    if(method_exists($o,"show"))
    {
      echo"Method exists";
    }

}
include "footer.php";
?>