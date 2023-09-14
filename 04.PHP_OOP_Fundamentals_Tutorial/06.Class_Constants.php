<?php
include "header.php";
class userdata{
  public $user;
  public $userId;
  const NAME= "Abdullah Al Mamun";
  public function __construct($a, $b)
  {
    $this->user=$a;
    $this->userId=$b;
    echo"User name is {$this->user} and ID number is {$this->userId}";
  }
  public function display()
{
  echo "Constant Name is: ".userdata::NAME;
}
  public function __destruct()
  {

  }
}
$user="Mamun";
$id= 24;
 $ur= new userdata($user,$id);
 echo "<br>";
 $ur->display();
include "footer.php";
?>