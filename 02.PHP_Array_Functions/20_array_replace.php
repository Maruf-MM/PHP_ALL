<?php
include "header.php";

$color1=array("a"=>"red","b"=>"blue");
$color2=array("a"=>"black","d"=>"green");
$result=array_replace($color1,$color2);

$color3=array("red","blue");
$color4=array("black","green");
$result2=array_replace($color3,$color4);

print("<pre>");
print_r($result);
print_r($result2);
print("<pre>");



include "footer.php";
?>