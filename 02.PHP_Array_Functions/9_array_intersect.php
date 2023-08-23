<?php
include "header.php";

$array1 = array("A"=>"Maruf","X"=>"Munna","C"=>"uhit");
$array2 = array("T"=>"Maruf","B"=>"Munna","E"=>"Muhit");
$array3 = array("B"=>"Maruf","S"=>"Munna","F"=>"Muhit");

$arraydiff = array_intersect($array1, $array2, $array3);

print("<pre>");
print_r($arraydiff);
print("</pre>");

include "footer.php";
?>