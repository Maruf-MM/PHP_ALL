<?php
include "header.php";

$color=array("red","blue","green","black");
$serchcolor=array_search("green",$color);

print("<pre>");
print_r($serchcolor);
print("<pre>");

include "footer.php";
?>