<?php
include "header.php";

$array=array("red","blue","green","black");
$slicearray=array_slice($array,3);
$slicearray2=array_slice($array,1,2);
$slicearray3=array_slice($array,-2,2);


print("<pre>");
print_r($slicearray);
print_r($slicearray2);
print_r($slicearray3);

print("<pre>");

include "footer.php";
?>