<?php
include "header.php";
class calculation
{
  public $a;
  public $b;
  public $result;
  public function number($number1,$number2)
  {
    $this->a= $number1;
    $this->b= $number2;
    return $this;

  }
  public function result()
  {
    $this->result= $this->a * $this->b;
    return $this->result;
  }
}
$cal= new calculation;
echo "The result is: ". $cal->number(5,6)->result();
include "footer.php";
?>