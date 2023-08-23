<?php
include "header.php";

$array = array("Name"=>"Maruf","Age"=>"23","Sex"=>"Male");


if(array_key_exists('Name', $array))
{
echo "Key is exist"."<br>";
}
else
{
  echo "Key Doesnot exist"."<br>";
}

$array = array("Name","Age","Sex");

if(array_key_exists(2,$array))
{
  echo "Key is exist";
  }
  else
  {
    echo "Key Does not exist <br>";
  }

include "footer.php";
?>