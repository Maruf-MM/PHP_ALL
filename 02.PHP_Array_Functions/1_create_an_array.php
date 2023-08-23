<?php
include "header.php";

$car = array('Toyota', 'Volvo', 'BMW');
echo $car[2] . "<br>";
$length = count($car);
echo $length . "<br>";
for ($i = 0; $i < $length; $i++) {
  echo $car[$i] . "<br>";
}

$age = array("Abdullah" => "30", "AL" => "20", "Mamun" => "40");
foreach ($age as $name => $age) {
  echo "Name= " . $name . ", Age=" . $age . "<br>";
}

$newcar = array(
  array("Bangladesh", "India", "Pakisthan"),
  array("A", "B", "C"),
  array("Maruf", "Munna", "Muhit")
);
echo $newcar[2][1];

include "footer.php";
