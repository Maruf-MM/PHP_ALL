<?php
include "header.php";

$array1=array("Tomakei","Khuji");
$result=array_pad($array1,3,"Ami");

print("<pre>");
print_r($result);
print("<pre>");

include "footer.php";
?>