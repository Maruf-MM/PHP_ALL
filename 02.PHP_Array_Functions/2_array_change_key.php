<?php
include "header.php";

$asarray=array("Maruf"=>"24","Munna"=>18,"Muhit"=>12);
print("<pre>");
print_r(array_change_key_case($asarray, CASE_UPPER));
print("<pre>");

$asarray=array("Maruf"=>"24","Munna"=>18,"Muhit"=>12);
print("<pre>");
print_r(array_change_key_case($asarray, CASE_LOWER));
print("<pre>");

include "footer.php";
?>