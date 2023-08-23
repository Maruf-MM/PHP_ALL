<?php
include "header.php";
function myfunction($department,$name)
{
  echo $name."comes from " .$department. "<br>";
}
$name= array(
"Maruf "  =>"CSE",
"Munna "  =>"EEE",
"Muhit "  =>"ECE",
);
array_walk($name,"myfunction");

include "footer.php";
?>