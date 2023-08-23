<?php
include "header.php";

$array1 = array("A"=>"BD","B"=>"ED","C"=>"ND","D"=>"LS");
$array2 = array("A"=>"Bk","B"=>"KD","C"=>"MD","D"=>"ND");
$array3 = array("A"=>"Bg","B"=>"ED","C"=>"MD","D"=>"ND");

$arraydiff = array_diff($array1, $array2, $array3);

print("<pre>");
print_r($arraydiff);
print("</pre>");

include "footer.php";
?>