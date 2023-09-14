<?php
include "header.php";
class userdata{
  public $user;
  public $userId;
  const NAME= "Abdullah Al Mamun";
  public static $age=30;
  public function __construct($a, $b)
  {
    $this->user=$a;
    $this->userId=$b;
    echo"User name is {$this->user} and ID number is {$this->userId}";
  }
  public static function display()
{
  echo "Constant Name is: ".userdata::NAME;
  echo"<br>";
  echo "Age is ".self::$age;
}
  public function __destruct()
  {

  }
}
$user="Mamun";
$id= 24;
 $ur= new userdata($user,$id);
 echo "<br>";
 userdata::display();
include "footer.php";

?>