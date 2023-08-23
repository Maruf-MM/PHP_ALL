<?php
include "header.php";
?>

<?php
$array = array("Maruf", "Munna", "Muhit");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['username'];
  if (in_array($name, $array)) {
    echo $name . " is exist.";
  } else {
    echo $name . " is not Exist";
  }
}
?>

<form action="33_in_array.php" method="POST">
  <input type="text" name="username">
  <input type="submit" value="Submit">
</form>

<?php
include "footer.php";
?>