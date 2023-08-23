<?php
include "header.php";
$array1= array("Maruf","Munna","Muhit");
$array2= array("How","are","you");

array_multisort($array1,SORT_DESC, $array2,SORT_ASC );

print("<pre>");
print_r($array1);
print("<pre>");

print("<pre>");
print_r($array2);
print("<pre>");

include "footer.php";
?>