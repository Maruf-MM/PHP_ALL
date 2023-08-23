<?php
include "header.php";

$name=array("Maruf","Munna","Muhit");
$department=array("CSE","EEE","ECE");

$combine= array_combine($name, $department);
print("<pre>");
print_r($combine);
print("<pre>");

include "footer.php";
