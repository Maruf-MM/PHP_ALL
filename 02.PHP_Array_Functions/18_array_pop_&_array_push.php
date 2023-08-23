<?php
include "header.php";

$pop= array("Tomakei","Khuji","Saradin");
$pop_result= array_pop($pop);

$push= array("I","Love","You");
$push_result=array_push($push,"Jan");

print("<pre>");
print_r($pop);
print_r($push);
print("</pre>");

include "footer.php";
?>