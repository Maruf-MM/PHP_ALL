<?php
include "header.php";

$array1 = array("A"=>"Maruf","X"=>"Munna","C"=>"Muhit");
$array2 = array("T"=>"Maruf","B"=>"Munna","K"=>"Muhit");
$array3 = array("B"=>"Maruf","S"=>"Munna","j"=>"Muhit");

$arraydiff = array_diff_key($array1, $array2, $array3);

print("<pre>");
print_r($arraydiff);
print("</pre>");

include "footer.php";
?>