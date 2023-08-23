<?php
include "header.php";

function myfunction($value)
{
  $v =$value+$value;
  return $v;
}
$store = array(1,2,3,4,5,6,7,8,9);

$rakhlam= array_map("myfunction",$store);
print("<pre>");
print_r($rakhlam);
print("<pre>");

function nextfunction($parameter)
{
  $w=strtoupper($parameter);
  return $w;
}

$store2= array('animal'=>'cow','type'=>'mamal');
$rakhlam2= array_map("nextfunction",$store2);
print("<pre>");
print_r($rakhlam2);
print("<pre>");

include "footer.php";
?>