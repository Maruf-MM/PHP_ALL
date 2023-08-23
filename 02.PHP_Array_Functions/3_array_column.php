<?php
include "header.php";

$namearray = array(
  array(
    'id' => '100',
    'First_name' => "Maruf",
    'Last_name' => "Hasan"
  ),
  array(
    'id' => '200',
    'First_name' => "Munna",
    'Last_name' => "Khan"
  ),
  array(
    'id' => '300',
    'First_name' => "Muhit",
    'Last_name' => "Rahman"
  )

);
$new=array_column($namearray,'First_name');
print("<pre>");
print_r($new);
print("<pre>");

echo "<br>";
print("<pre>");
print_r (array_column($namearray,'Last_name','First_name'));
print("<pre>");


include "footer.php";
