<?php
include "header.php";

$array1 = array("A"=>"Maruf","B"=>"Munna","C"=>"Muhit");
$array2 = array("T"=>"Maruf","B"=>"Munna","K"=>"Muhit");
$array3 = array("A"=>"Aruf","B"=>"Munna","j"=>"Muhit");

$arraydiff = array_diff_assoc($array1, $array2, $array3);

print("<pre>");
print_r($arraydiff);
print("</pre>");


include "footer.php";
?>