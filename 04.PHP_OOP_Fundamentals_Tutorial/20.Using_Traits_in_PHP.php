<?php
include "header.php";
trait a 
{
  public function a1()
  {
    return "Traits is a fun <br>";
  }
}
trait b 
{
  public function a2()
  {
    return "Its from  trait b";
  }
}
class cl 
{
  use a,b;
}
$c= new cl;
include "footer.php";
?>