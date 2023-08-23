<?php
include "header.php";

$array= array("red","blue","green","black");
array_unshift($array,"yellow");

print("<pre>");
print_r($array);
print("<pre>");

include "footer.php";
?>