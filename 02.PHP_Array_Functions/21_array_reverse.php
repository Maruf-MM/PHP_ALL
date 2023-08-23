<?php
include "header.php";

$color=array("red","blue","green","black");
$revcolor=array_reverse($color);

print("<pre>");
print_r($color);
print_r($revcolor);
print("<pre>");

include "footer.php";
?>