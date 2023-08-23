<?php
include "header.php";

$array= array("red","blue","red","green","black",1,3,6,3,4);
$uniquearray= array_unique($array);

print("<pre>");
print_r($uniquearray);
print("<pre>");

include "footer.php";
?>