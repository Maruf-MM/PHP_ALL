<?php
include "header.php";

$array1 = array("A"=>"Maruf","B"=>"Munna","C"=>"Muhit");
$array2 = array("A"=>"Maruf","B"=>"Munna","C"=>"Muhit");
$array3 = array("A"=>"Maruf","S"=>"Munna","C"=>"Muhit");

$arraydiff = array_intersect_assoc($array1, $array2, $array3);

print("<pre>");
print_r($arraydiff);
print("</pre>");

include "footer.php";
?>