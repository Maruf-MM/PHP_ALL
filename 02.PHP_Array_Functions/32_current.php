<?php
include "header.php";

$value=array("name","class","age");

$current=current($value);
$next=next($value);
$end=end($value);
$pre=prev($value);

print("<pre>");
print_r($current);
echo "<br>";
print_r($next);
echo "<br>";
print_r($end);
echo "<br>";
print_r($pre);
print("</pre>");

include "footer.php";
?>