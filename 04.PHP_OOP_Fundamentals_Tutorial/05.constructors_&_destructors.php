<?php
include "header.php";
class userdata{
  public $user;
  public $userId;
  public function __construct($a, $b)
  {
    $this->user=$a;
    $this->userId=$b;
    echo"User name is {$this->user} and ID number is {$this->userId}";
  }
  public function __destruct()
  {

  }
}
$user="Mamun";
$id= 24;
 $ur= new userdata($user,$id);
include "footer.php";
?>