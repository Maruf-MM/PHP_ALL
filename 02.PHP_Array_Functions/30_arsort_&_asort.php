<?php
include "header.php";

$name= array(
                "Maruf "  =>"23",
                "Munna "  =>"17",
                "Muhit "  =>"11",
              );
$name2= array(
                "Maruf "  =>"23",
                "Munna "  =>"17",
                "Muhit "  =>"11",
              );

asort($name);
arsort($name2);

print("<pre>");
print_r($name);
print_r($name2);
print("</pre>");




include "footer.php";
?>