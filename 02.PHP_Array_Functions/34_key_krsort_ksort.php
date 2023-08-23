<?php
include "header.php";

$krsort=array(
     "A"=>"23",
     "B"=>"17",
     "C"=>"11"
     );

krsort($krsort);
foreach($krsort as $key => $value)
{
  echo "Name: $key, Age: $value <br>";
}

ksort($krsort);
foreach($krsort as $key => $value)
{
  echo "Name: $key, Age: $value <br>";
}

include "footer.php";
?>