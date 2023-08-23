<?php
include "header.php";

$name=array("Maruf","Maruf","Maruf","Munna","Muhit","Maruf","Munna","Muhit");
$department=array("CSE","CSE","EEE","ECE","CSE","EEE","ECE");

print("<pre>");
print_r (array_count_values($name))."<br>";
print_r (array_count_values($department))."<br>";
print("<pre>");

include "footer.php";
?>