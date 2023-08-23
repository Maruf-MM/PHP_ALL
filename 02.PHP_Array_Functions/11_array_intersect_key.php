<?php
include "header.php";

$array1 = array("A"=>"Maruf","B"=>"Hunna","C"=>"Muhit");
$array2 = array("A"=>"Maruf","B"=>"Munna","C"=>"Muhit");
$array3 = array("A"=>"Maruf","B"=>"Munna","C"=>"Muhit");

$arraydiff = array_intersect_key($array1, $array2, $array3);

print("<pre>");
print_r($arraydiff);
print("</pre>");

include "footer.php";
?>