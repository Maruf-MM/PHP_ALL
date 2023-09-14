<?php
include "header.php";
class userdata
{
  public $user_name;
  public $user_age;

  public function show($A,$B)
  {
    echo "Name is: $A and Age is:$B";
  }

  
}
class new_userdata extends userdata
{
  public $status;
  public function __construct($c)
  {
    $this->status=$c;
  }

  public function show($A,$B)
  {
    echo "Name is: $A and Age is: $B and status is {$this->status}";
  }
}
$obj= new userdata('Maruf',23);
$obj->show('Maruf',23);
$nobj= new new_userdata('Single');
$nobj->show("Munna",18,);
  include "footer.php";
?>