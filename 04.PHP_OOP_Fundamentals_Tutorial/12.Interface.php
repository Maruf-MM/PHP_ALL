<?php
include "header.php";
interface school
{
  public function myschool();
}
interface college
{
  public function mycollege();
}
interface versity
{
  public function myversity();
}

class teacher implements school, college, versity
{
  public function __construct()
  {
    $this->myschool();
    $this->mycollege();
    $this->myversity();

  }
  public function myschool()
  {
    echo "I am a school Teacher.<br>";
  }
  public function mycollege()
  {
    echo "I am a college Teacher.<br>";
  }
  public function myversity()
  {
    echo "I am a versity Teacher.<br>";
  }
}
$teacher= new teacher();
include "footer.php";
?>