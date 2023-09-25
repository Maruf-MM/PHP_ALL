<?php
include "header.php";
class person
{
  public $name='Maruf';
  public $age='23';
  public $workspace='TAL';
  private $email='maruf236hasan@gmail.com';
  protected $password= '123456';
  public function name()
  {
    echo "Inside from class <br>";
    foreach($this as $key=>$value)
{
  echo "<pre>";
  echo $key."=>".$value."<br>";
  echo "</pre>";
}
  }
}
$obj= new person;
echo "Outside from class <br>";
foreach($obj as $key=>$value)
{
  echo "<pre>";
  echo $key."=>".$value."<br>";
  echo "</pre>";
}
$obj->name();
include "footer.php";
?>