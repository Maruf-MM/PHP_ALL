<?php
include "header.php";

$array = array("A"=>"Maruf","B"=>"Munna","C"=>"Muhit");

print("<pre>");
print_r($array);
print("</pre>");

$arrkeynew = array_keys($array);

print("<pre>");
print_r($arrkeynew);
print("</pre>");

include "footer.php";
?>