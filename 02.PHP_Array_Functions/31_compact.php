<?php
include "header.php";

$name="Maruf";
$class="10";
$age=24;

$compact=compact("name","class","age");
print("<pre>");
print_r($compact);
print("</pre>");




include "footer.php";
?>