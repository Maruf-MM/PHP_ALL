<?php
include "header.php";

$array1= array("Maruf","Munna","Muhit");
$array2= array("How","are","you","?");

$merge1= array_merge($array1,$array2);

$newarray= array('animal'=>'cow','type'=>'mamal');

print("<pre>");
print_r($merge1);
print("<pre>");

$array3= array('Name'=>"Maruf",'lass'=>"SES",'Age'=>"23");
$array4= array('Name'=>"Munna",'Class'=>"11",'Age'=>"18");

$merge2= array_merge($array3,$array4);

print("<pre>");
print_r($merge2);
print("<pre>");

include "footer.php";
?>