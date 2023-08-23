<?php
include "header.php";

$college= array("BIST","MIST","KIST");
print("<pre>");
print_r($college);
print("</pre>");

shuffle($college);
print("<pre>");
print_r($college);
print("</pre>");

include "footer.php";
?>